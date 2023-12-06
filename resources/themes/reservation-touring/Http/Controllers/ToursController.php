<?php


namespace Corals\Modules\Reservation\Http\Controllers;

use Corals\Foundation\View\Facades\JavaScriptFacade;
use Corals\Modules\CMS\Models\Page;
use Corals\Modules\Entity\Models\Entry;
use Corals\Utility\Wishlist\Classes\WishlistManager;
use Facades\Corals\Modules\Reservation\Classes\TouringReservations;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ToursController extends ToursBaseController
{
    /**
     * @param Request $request
     * @return Application|Factory|View
     */
    public function index(Request $request)
    {

        $tours = TouringReservations::getTours($request->all());

        JavaScriptFacade::put([
            'tours_map_details' => TouringReservations::getTouringMapDetails()
        ]);

        $item = Page::query()->where('slug', 'tours')->first();

        $this->reservationSEO($item->title);


        return view('views.tours.index')->with(compact('tours', 'item'));
    }

    /**
     * @param $tourSlug
     * @return Application|Factory|View
     */
    public function singleTour($tourSlug)
    {
        $tour = Entry::query()
            ->whereRaw("JSON_extract(entity_entries.`values`,'$.slug') = '$tourSlug' ")
            ->first();

        $this->reservationSEO($tour->values['title']);

        JavaScriptFacade::put([
            'tours_map_details' => TouringReservations::getTouringMapDetails($tour->id)
        ]);
        $category = $tour->categories()->first();

        return view('views.tours.single_tour')->with(compact('tour', 'category'));
    }

    /**
     * @param Request $request
     * @return Application|Factory|View
     */
    public function dashboard(Request $request)
    {
        $userWishlists = (new WishlistManager(Entry::class))
            ->getUserWishlist()
            ->get();


        return view('views.dashboard', compact('userWishlists'));
    }
}
