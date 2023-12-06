@extends('layouts.master')

@section('content')
    <section class="parallax-window" data-parallax="scroll"
             data-image-src="{{$tour->media()->first() ? $tour->media()->first()->getFullUrl() :''}}"
             data-natural-width="1400" data-natural-height="470">
        <div class="parallax-content-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h1>{{$tour->presentStripTags('title')}}</h1>
                        <span>{{$tour->presentStripTags('caption')}}</span>
                        @include('views.tours.partials.avg_rating')
                    </div>
                    <div class="col-md-4">
                        <div id="price_single_main">
                            @lang('reservation-touring::labels.touring.from_per_person')
                            <span>{{Facades\Corals\Modules\Reservation\Classes\TouringReservations::getTourMainPrice($tour)}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <main>
        <div id="position">
            <div class="container">
                <ul>
                    <li><a href="{{url('/')}}">@lang('reservation-touring::labels.touring.home')</a>
                    </li>
                    <li><a href="{{url('tours')}}">@lang('reservation-touring::labels.touring.tours')</a>
                    </li>
                    <li>{{$tour->presentStripTags('title')}}</li>
                </ul>
            </div>
        </div>
        <!-- End Position -->

        <div class="collapse" id="collapseMap">
            <div id="map" class="map"></div>
        </div>
        <!-- End Map -->

        <div class="container margin_60">
            <div class="row">
                <div class="col-lg-8" id="single_tour_desc">

                    <div id="single_tour_feat">
                        <ul>
                            <li>
                                <i class="icon_set_1_icon-4"></i>{{$category->name}}
                            </li>
                            <li><i class="icon_set_1_icon-83"></i>{{$tour->presentStripTags('tour_period')}}</li>

                            <li><i class="icon_set_1_icon-82"></i>{{$tour->wishlistsCount()}} Likes</li>

                            @foreach($tour->tags as $tag)
                                <li><i class="{{$tag->getProperty('icon')}}"></i>{{$tag->name}}</li>
                            @endforeach
                        </ul>
                    </div>

                    <p class="d-none d-md-block d-block d-lg-none"><a class="btn_map" data-toggle="collapse"
                                                                      href="#collapseMap" aria-expanded="false"
                                                                      aria-controls="collapseMap"
                                                                      data-text-swap="@lang('reservation-touring::labels.touring.hide_map')"
                                                                      data-text-original="@lang('reservation-touring::labels.touring.view_on_map')">@lang('reservation-touring::labels.touring.view_on_map')</a>
                    </p>
                    <!-- Map button for tablets/mobiles -->

                    <div class="row">
                        <div class="col-lg-3">
                            <h3>@lang('reservation-touring::labels.touring.description')</h3>
                        </div>
                        <div class="col-lg-9">
                            <h4>{{$tour->presentStripTags('title')}}</h4>
                            <p>
                                {{$tour->presentStripTags('description')}}
                            </p>

                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-lg-3">
                            <h3>@lang('reservation-touring::labels.touring.schedule')</h3>
                        </div>
                        <div class="col-lg-9">
                            <div class="table-responsive">
                                <table class="table table-striped">

                                    <tbody>
                                    {!! \Facades\Corals\Modules\Reservation\Classes\TouringReservations::getTourSchedule($tour) !!}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-lg-3">
                            <h3>@lang('reservation-touring::labels.touring.reviews') </h3>
                            <a href="#" class="btn_1 add_bottom_30" data-toggle="modal" data-target="#myReview">
                                @lang('reservation-touring::labels.touring.leave_review')
                            </a>
                        </div>
                        <div class="col-lg-9">
                            <div id="general_rating">
                                @if($countRating=$tour->countRating())
                                    {{$countRating}}
                                @endif

                                @lang('reservation-touring::labels.touring.reviews')
                                <div class="rating">
                                    @php $avgRating=$tour->averageRating(true)[0] @endphp
                                    @for($i=1;$i<=5 ; $i++)
                                        <i class="icon-smile {{ $avgRating >= $i ? 'voted':''}}"></i>
                                    @endfor

                                </div>
                            </div>

                            <hr>

                            @forelse($tour->ratings('approved')->get() as $review)

                                <div class="review_strip_single">
                                    <img style="width: 68px;height: 68px" src="{{$review->author->picture}}" alt="Image"
                                         class="rounded-circle">
                                    <small> - {{$review->created_at->diffForHumans()}} -</small>
                                    <h4>{{$review->author->full_name}}</h4>
                                    <p>
                                        {!! $review->body !!}
                                    </p>
                                    <div class="rating">
                                        @for($i=1;$i<=5 ; $i++)
                                            <i class="icon-smile {{$review->rating >= $i ? 'voted':''}}"></i>
                                        @endfor

                                    </div>
                                </div>
                            @empty

                            @endforelse
                        </div>
                    </div>
                </div>
                <!--End  single_tour_desc-->

                <aside class="col-lg-4">
                    <p class="d-none d-xl-block d-lg-block d-xl-none">
                        <a class="btn_map" data-toggle="collapse" href="#collapseMap" aria-expanded="false"
                           aria-controls="collapseMap"
                           data-text-swap="@lang('reservation-touring::labels.touring.hide_map')"
                           data-text-original="@lang('reservation-touring::labels.touring.view_on_map')">@lang('reservation-touring::labels.touring.view_on_map')</a>
                    </p>


                    <div class="box_style_1 expose">

                        <div id="booking-vue">
                            <Booking tour-hashed-id="{{$tour->hashed_id}}"/>
                        </div>

                        <a class="btn_full_outline" href="{{url("entity/entry/wishlist/$tour->hashed_id")}}"
                           data-action="post"
                           data-page_action="toggleSingleTourWishlistButton"
                           data-add_text="@lang('reservation-touring::labels.touring.add_to_wishlist')"
                           data-remove_text="@lang('reservation-touring::labels.touring.remove_from_wishlist')"
                           data-wishlist_tour_hashed_id="{{$tour->hashed_id}}"
                           data-style="zoom-in">
                            <i class=" icon-heart"></i> {{$tour->inWishlist() ?trans('reservation-touring::labels.touring.remove_from_wishlist'):trans('reservation-touring::labels.touring.add_to_wishlist')}}

                        </a>
                    </div>
                    <!--/box_style_1 -->

                    @include('partials.book_by_phone')

                </aside>
            </div>
            <!--End row -->
        </div>
        <!--End container -->

        <div id="overlay"></div>
        <!-- Mask on input focus -->

    </main>

@endsection


@section('after_content')
    <div class="modal fade" id="myReview" tabindex="-1" role="dialog" aria-labelledby="myReviewLabel" aria-hidden="true"
         data-page_action="closeModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"
                        id="myReviewLabel">@lang('reservation-touring::labels.touring.write_your_review')</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div id="message-review">
                    </div>
                    @auth
                        <form action="{{url("entity/entry/$tour->hashed_id/create-rate")}}" method="post"
                              class="ajax-form"
                              name="review_tour" id="review_tour">


                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>@lang('reservation-touring::labels.touring.rate')</label>
                                        <select class="form-control" name="review_rating" id="position_review">
                                            <option value="">Please review</option>
                                            <option value="1">Low</option>
                                            <option value="2">Sufficient</option>
                                            <option value="3">Good</option>
                                            <option value="4">Excellent</option>
                                            <option value="5">Super</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                {!! CoralsForm::text('review_subject','reservation-touring::labels.touring.subject',true) !!}
                            </div>
                            <div class="form-group">
                                {!! CoralsForm::textarea('review_text','reservation-touring::labels.touring.review',true,null,['rows'=>4]) !!}
                            </div>
                            <button type="submit" class="btn_1">
                                @lang('reservation-touring::labels.touring.submit')
                            </button>
                        </form>
                    @else
                        <h6>
                            @lang('reservation-touring::labels.partial.tabs.need_login_review')
                        </h6>
                    @endauth
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')

    {!! \Html::script('/assets/core/compiled/js/manifest.js') !!}
    {!! \Html::script('/assets/core/compiled/js/vendor.js') !!}

    {!! \Theme::js('dist/js/Booking.js') !!}

    <script src='https://maps.googleapis.com/maps/api/js?key={{ \Settings::get('utility_google_address_api_key') }}&libraries=places'></script>

    {!! Theme::js('js/map.js') !!}
    {!! Theme::js('js/infobox.js') !!}
@endsection