<?php

namespace Corals\Modules\Reservation\Classes;

use Carbon\Carbon;
use Corals\Foundation\Search\Search;
use Corals\Modules\Entity\Models\Entry;
use Corals\Modules\Payment\Facades\Payments;
use Corals\Modules\Reservation\Models\LineItem;
use Corals\Modules\Reservation\Models\Service;
use Corals\Utility\Category\Facades\Category as CategoryManager;
use Corals\Settings\Facades\Settings;
use Corals\User\Models\User;
use Corals\Utility\Tag\Models\Tag;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;
use \Corals\Modules\Reservation\Models\Reservation;

class TouringReservations
{
    /**
     * @var array
     */
    protected $touringCount = [];

    /**
     * @return mixed
     */
    public function getCategories()
    {
        return CategoryManager::getCategoriesByParent('city-tours-category', 'active', true);
    }

    /**
     * @return Builder[]|Collection
     */
    public function getTags()
    {
        return Tag::query()
            ->join('utility_taggables', function ($joinTaggable) {
                $joinTaggable->on('utility_tags.id', 'utility_taggables.tag_id')
                    ->where('utility_taggables.taggable_type', getMorphAlias(Entry::class));
            })->groupBy('utility_tags.id')
            ->get();
    }

    /**
     * @param array $filters
     * @return LengthAwarePaginator
     */
    public function getTours(array $filters)
    {
        $toursListQuery = $this->toursListBaseQuery();


        foreach ($filters as $filter => $value) {
            if (empty($value)) continue;

            $methodFilterName = sprintf("%sFilterQuery", strtolower($filter));

            if (method_exists($this, $methodFilterName)) {
                $this->{$methodFilterName}($toursListQuery, $value);
            }
        }

        return $toursListQuery->select('entity_entries.*')->paginate();

    }

    /**
     * @param Builder $queryBuilder
     * @param $sortBy
     */
    protected function sortFilterQuery(Builder $queryBuilder, $sortBy)
    {

        switch ($sortBy) {
            case 'lowest_price':
                $table = 'res_model_has_line_items';
                $direction = 'asc';
                break;
            case   'highest_price':
                $table = 'res_model_has_line_items';
                $direction = 'desc';
                break;
            case 'lowest_ranking':
                $table = 'utility_avg_ratings';
                $direction = 'asc';
                break;
            case 'highest_ranking':
                $table = 'utility_avg_ratings';
                $direction = 'desc';
                break;

            default:
                $table = 'res_model_has_line_items';
                $direction = 'asc';
        }


        if ($table == 'res_model_has_line_items') {
            if (!isJoined($queryBuilder, $table)) {
                $this->priceFilterQuery($queryBuilder);
            }

            $queryBuilder->orderBy('res_line_items.rate_value', $direction);


        } elseif ($table == 'utility_avg_ratings') {
            if (!isJoined($queryBuilder, $table)) {
                $this->ratingFilterQuery($queryBuilder);
            }
            $queryBuilder->orderBy('utility_avg_ratings.avg', $direction);
        }


    }

    /**
     * @param Builder $queryBuilder
     * @param $categories
     */
    protected function categoriesFilterQuery(Builder $queryBuilder, $categories): void
    {
        if (in_array('all', $categories)) {
            return;
        }

        $queryBuilder->join('utility_model_has_category', function ($joinModelHasCategories) {
            $joinModelHasCategories->on('entity_entries.id', 'utility_model_has_category.model_id')
                ->where('utility_model_has_category.model_type', getMorphAlias(Entry::class));
        })->join('utility_categories', 'utility_model_has_category.category_id', 'utility_categories.id')
            ->whereIn('utility_categories.slug', $categories);
    }

    /**
     * @param Builder $queryBuilder
     * @param $address
     */
    public function addressFilterQuery(Builder $queryBuilder, $address)
    {
        $lat = request('lat');
        $long = request('long');

        if (!$lat || !$long) {
            return $queryBuilder;
        }
        $haversine = "(6371 * acos(cos(radians(" . $lat . "))
                    * cos(radians(json_extract(res_services.properties,'$.lat')))
                    * cos(radians(json_extract(res_services.properties,'$.long'))
                    - radians(" . $long . "))
                    + sin(radians(" . $lat . "))
                    * sin(radians(json_extract(res_services.properties,'$.lat')))) )";

        $radius = request('radius', Settings::get('utility_google_address_default_search_radius', 50));

        $queryBuilder->when(!isJoined($queryBuilder, 'res_services'), function ($query) {
            $query->join(
                'res_services', DB::raw("CAST(json_unquote(json_extract(entity_entries.values,'$.service')) as UNSIGNED)"), 'res_services.id'
            );
        })->selectRaw("{$haversine} AS distance")
            ->whereRaw("{$haversine} < ?", [$radius]);
    }

    /**
     * @param Builder $queryBuilder
     * @param $searchTerm
     */
    protected function termFilterQuery(Builder $queryBuilder, $searchTerm): void
    {
        tap(new Search, function (Search $search) use (&$queryBuilder, $searchTerm) {
            $config = [
                'title_weight' => Settings::get('ecommerce_search_title_weight'),
                'content_weight' => Settings::get('ecommerce_search_content_weight'),
                'enable_wildcards' => Settings::get('ecommerce_search_enable_wildcards')
            ];

            $queryBuilder = $search->AddSearchPart($queryBuilder, $searchTerm, Entry::class, $config);
        });
    }

    /**
     * @param Builder $queryBuilder
     * @param $date
     */
    protected function dateFilterQuery(Builder $queryBuilder, $date): void
    {
        $queryBuilder
            ->when(!isJoined($queryBuilder, 'res_services'), function ($query) {
                $query->join(
                    'res_services', DB::raw("CAST(json_unquote(json_extract(entity_entries.values,'$.service')) as UNSIGNED)"), 'res_services.id'
                );
            })->join('utility_schedules', function ($joinSchedules) {
                $joinSchedules->on('res_services.id', 'utility_schedules.scheduleable_id')
                    ->where('utility_schedules.scheduleable_type', getMorphAlias(Service::class));
            })->where(function ($query) use ($date) {
                $dayOfWeek = Carbon::parse($date)->shortEnglishDayOfWeek;
                $query->where('utility_schedules.day_of_the_week', $dayOfWeek)
                    ->whereNotNull('utility_schedules.start_time')
                    ->whereNotNull('utility_schedules.end_time');
            });
    }

    /**
     * @param Builder $queryBuilder
     * @param $tags
     */
    protected function tagsFilterQuery(Builder $queryBuilder, $tags): void
    {
        $queryBuilder->join('utility_taggables', function ($joinTaggable) {
            $joinTaggable->on('entity_entries.id', 'utility_taggables.taggable_id')
                ->where('utility_taggables.taggable_type', getMorphAlias(Entry::class));
        })->join('utility_tags', 'utility_taggables.tag_id', 'utility_tags.id')
            ->whereIn('utility_tags.slug', $tags);
    }

    /**
     * @param Builder $queryBuilder
     * @param null $priceRange
     */
    protected function priceFilterQuery(Builder $queryBuilder, $priceRange = null): void
    {

        if (empty($priceRange)) {
            $joinMethod = 'leftJoin';
        }

        $queryBuilder
            ->join(
                'res_services', DB::raw("CAST(json_unquote(json_extract(entity_entries.values,'$.service')) as UNSIGNED)"), 'res_services.id'
            )->{$joinMethod ?? 'join'}('res_model_has_line_items', function ($query) {
                $query->on('res_services.id', 'res_model_has_line_items.model_id')
                    ->where('res_model_has_line_items.is_main_line_item', true);
            })->join('res_line_items', 'res_model_has_line_items.line_item_id', 'res_line_items.id')
            ->when($priceRange, function ($query, $priceRange) {
                [$minPrice, $maxPrice] = explode(';', $priceRange);
                $query->whereBetween('res_line_items.rate_value', [$minPrice, $maxPrice]);
            });

    }

    /**
     * @param Builder $queryBuilder
     * @param array $ratings
     */
    protected function ratingFilterQuery(Builder $queryBuilder, $ratings = []): void
    {
        if (empty($ratings)) {
            $joinMethod = 'leftJoin';
        }

        $queryBuilder->{$joinMethod ?? 'join'}('utility_avg_ratings', function ($joinRatings) {
            $joinRatings->on('entity_entries.id', 'utility_avg_ratings.avgreviewable_id')
                ->where('utility_avg_ratings.avgreviewable_type', getMorphAlias(Entry::class));
        })->when($ratings, function ($query, $ratings) {
            $query->whereIn('utility_avg_ratings.avg', $ratings);
        });
    }

    /**
     * @return Builder
     */
    public function toursListBaseQuery(): Builder
    {
        return Entry::query()->groupBy('entity_entries.id');
    }

    /**
     * @param $tour
     * @return mixed
     */
    public function getTourService($tour)
    {
        $serviceId = $tour->values['service'];

        return Service::find($serviceId);
    }

    /**
     * @param $tour
     * @param false $formatted
     * @return mixed
     */
    public function getTourMainPrice($tour, $formatted = true)
    {
        $service = $this->getTourService($tour);

        $mainPrice = \Payments::currency_convert($service->mainLineItem()->first()->rate_value);

        return $formatted ? \Payments::currency($mainPrice) : $mainPrice;
    }

    /**
     * @param null $categorySlug
     * @return float|int|mixed
     */
    public function getCategoryTouringCount($categorySlug = null)
    {
        if (!$this->touringCount) {
            $this->touringCount = Entry::query()
                ->join('utility_model_has_category', function ($joinModelHasCategories) {
                    $joinModelHasCategories->on('entity_entries.id', 'utility_model_has_category.model_id')
                        ->where('utility_model_has_category.model_type', getMorphAlias(Entry::class));
                })->rightJoin('utility_categories', 'utility_model_has_category.category_id', 'utility_categories.id')
                ->groupBy('utility_categories.id')
                ->selectRaw("utility_categories.slug as category_slug ,count(entity_entries.id) as tours_count")
                ->pluck('tours_count', 'category_slug')
                ->toArray();
        }

        return $categorySlug
            ? $this->touringCount[$categorySlug] ?? 0
            : array_sum($this->touringCount);

    }

    /**
     * @param $tour
     */
    public function getTourSchedule($tour)
    {
        $service = $this->getTourService($tour);

        foreach ($service->schedules as $schedule) {

            if ($schedule->start_time && $schedule->end_time) {

                [$hours, $minutes] = (int)explode(':', $schedule->start_time);
                $startTime = now()->setHours($hours)->setMinutes($minutes)->format('H.i');
                [$hours, $minutes] = (int)explode(':', $schedule->end_time);
                $endTime = now()->setHours($hours)->setMinutes($minutes)->format('H.i');
                $time = "$startTime - $endTime";
            } else {
                $time = "Closed";
            }


            $table[] = sprintf("<tr><td>%s</td><td>%s</td></tr>", $schedule->day_of_the_week, $time);
        }

        return join("", $table ?? []);
    }

    /**
     * @param $reservation
     * @param $entry
     * @return string
     */
    public function successCheckoutMessage($reservation, $entry)
    {

        $message = trans('reservation-touring::labels.touring.checkout_success_message', [
            'tour' => $entry->presentStripTags('title'),
            'start_date' => $reservation->starts_at->format('d M Y h:i A'),
            'end_date' => $reservation->ends_at->format('h:i A')
        ]);


        if ($reservation->status == 'pending') {
            $message .= sprintf("<br><strong class='text-danger'>%s</strong>", trans('reservation-touring::labels.touring.will_be_reviewed_soon'));
        }
        return "$message</p>";
    }

    /**
     * @param null $tourId
     * @return array
     */
    public function getTouringMapDetails($tourId = null)
    {
        $map = [];

        $toursCategories = $tours = Entry::query()
            ->join('utility_model_has_category', function ($joinModelHasCategories) {
                $joinModelHasCategories->on('entity_entries.id', 'utility_model_has_category.model_id')
                    ->where('utility_model_has_category.model_type', getMorphAlias(Entry::class));
            })->join('utility_categories', 'utility_model_has_category.category_id', 'utility_categories.id')
            ->select('entity_entries.*', 'utility_categories.slug as category_slug')
            ->when($tourId, function ($query, $tourId) {
                $query->where('entity_entries.id', $tourId);
            })->groupBy('entity_entries.id')
            ->get()
            ->groupBy('category_slug');

        foreach ($toursCategories as $categorySlug => $toursCategory) {
            $categorySlug = str_replace('-', '_', $categorySlug);

            foreach ($toursCategory as $tour) {
                $service = Service::find($tour->values['service']);

                $map[$categorySlug][] = [
                    'name' => $tour->values['title'],
                    'location_latitude' => $service->getProperty('lat'),
                    'location_longitude' => $service->getProperty('long'),
                    'map_image_url' => $tour->media()->first() ? $tour->media()->first()->getFullUrl() : '',
                    'name_point' => $tour->values['title'],
                    'description_point' => $tour->values['description'],
                    'url_point' => url('tours', [$tour->values['slug']])

                ];

            }
        }

        return $map;
    }

    /**
     * @param bool $isFeatured
     * @param int $limit
     * @return Builder[]|Collection
     */
    public function getRandomTours($isFeatured = false, $limit = 3)
    {
        return Entry::query()
            ->when($isFeatured, function ($query) {
                $query->whereRaw("json_extract(entity_entries.values,'$.is_featured')");
            }, function ($query) {
                $query->whereRaw("json_extract(entity_entries.values,'$.is_featured') is null");
            })->inRandomOrder()
            ->take($limit)
            ->get();

    }

    /**
     * @param $categoryId
     * @return mixed
     */
    public function getCategoryMinPrice($categoryId)
    {

        $minPrice = LineItem::query()->join('res_model_has_line_items', function ($joinModelHasLineItems) {
            $joinModelHasLineItems->on('res_line_items.id', 'res_model_has_line_items.line_item_id')
                ->where('res_model_has_line_items.model_type', getMorphAlias(Service::class));
        })->join('res_services', 'res_model_has_line_items.model_id', 'res_services.id')
            ->join('entity_entries', 'res_services.id', DB::raw("CAST(json_unquote(json_extract(entity_entries.values,'$.service')) as UNSIGNED)"))
            ->join('utility_model_has_category', function ($joinModelHasCategory) {

                $joinModelHasCategory->on('entity_entries.id', 'utility_model_has_category.model_id')
                    ->where('utility_model_has_category.model_type', getMorphAlias(Entry::class));

            })->groupBy('utility_model_has_category.category_id')
            ->where('utility_model_has_category.category_id', $categoryId)
            ->orderBy('res_line_items.rate_value', 'asc')
            ->pluck('res_line_items.rate_value')
            ->toArray();

        return Payments::currency($minPrice[0] ?? 0);
    }

    /**
     * @param null $user
     * @return Builder[]|Collection
     */
    public function getUserReservations($user = null)
    {

        if (!$user) $user = user();

        return Reservation::query()
            ->join('res_services', 'res_reservations.service_id', 'res_services.id')
            ->join('entity_entries', 'res_services.id', DB::raw("CAST(json_unquote(json_extract(entity_entries.values,'$.service')) as UNSIGNED)"))
            ->where('res_reservations.owner_id', $user->id)
            ->where('res_reservations.owner_type', getMorphAlias(User::class))
            ->select('res_reservations.*', 'entity_entries.values')
            ->get()
            ->each(function ($reservation) {
                $reservation->values = json_decode($reservation->values, true);
            });

    }


}
