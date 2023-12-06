@extends('layouts.master')

@section('css')
    <style>
        .dd-select {
            height: 50px !important;
            border: unset !important;
        }
    </style>

@endsection

@section('content')


    <section id="search_container"
             style="background-image: url({{$item->featured_image}}) ;background-repeat: round">
        <div id="search_2">


            <div class="tab-content">
                <div class="tab-pane active show" id="tours">
                    <form action="{{url('tours')}}" method="GET" id="home-search-form">
                        <div class="row no-gutters custom-search-input-2">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <input class="form-control" type="text"
                                           name="address"

                                           placeholder="@lang('reservation-touring::labels.touring.where')"
                                           id="_autocomplete">
                                    <i class="icon_pin_alt"></i>
                                    <input type="hidden" id="lat" name="lat">
                                    <input type="hidden" id="long" name="long">

                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <input class="form-control date-pick" type="text" name="date"
                                           data-date-format="M d, D"
                                           placeholder="@lang('reservation-touring::labels.touring.when')">
                                    <i class="icon_calendar"></i>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <select class="ddslick" name="categories[]">
                                        <option value="all"
                                                data-imagesrc="{{Theme::url("img/icons_search/all_tours.png")}}"
                                                selected>@lang('reservation-touring::labels.touring.all_tours')
                                        </option>

                                        @foreach(\Facades\Corals\Modules\Reservation\Classes\TouringReservations::getCategories() as $category)
                                            <option value="{{$category->slug}}"
                                                    data-imagesrc="{{$category->thumbnail}}">{{$category->name}}
                                            </option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <input type="submit" class="btn_search"
                                       value="@lang('reservation-touring::labels.touring.search')">
                            </div>
                        </div>
                        <!-- /row -->
                    </form>


                </div>
            </div>
        </div>
    </section>
    <!-- End hero -->

    <main>
        <div class="container margin_60">

            <div class="main_title">
                <h2>{{Settings::get('site_name')}}
                    <span>@lang('reservation-touring::labels.touring.top')</span> @lang('reservation-touring::labels.touring.tours')
                </h2>
                <p>İstanbul is a magical seal which unites Europe and Asia since the ancient times</p>
            </div>

            <div class="row">

                @foreach(Facades\Corals\Modules\Reservation\Classes\TouringReservations::getRandomTours(true) as $tour)

                    @php
                        $category =$tour->categories()->first();
                    @endphp
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                        <div class="tour_container">
                            <div class="ribbon_3 popular">
                                <span>@lang('reservation-touring::labels.touring.popular')</span></div>
                            <div class="img_container">
                                <a href="{{url('tours',[$tour->presentStripTags('slug')])}}">
                                    <img src="{{$tour->media()->first() ? $tour->media()->first()->getFullUrl() :''}}"
                                         width="800" height="533"
                                         class="img-fluid" alt="Image">
                                    <div class="short_info">
                                        <i class="icon_set_1_icon-44"></i>{{$category->name}}<span
                                                class="price">{{\Facades\Corals\Modules\Reservation\Classes\TouringReservations::getTourMainPrice($tour)}}</span>
                                    </div>
                                </a>
                            </div>

                            <div class="tour_title">
                                <h3>
                                    <strong>{{$tour->presentStripTags('title')}}</strong> @lang('reservation-touring::labels.touring.tour')
                                </h3>
                                <div class="rating">
                                    @include('views.tours.partials.avg_rating')
                                </div><!-- end rating -->
                                @include('views.tours.partials.wishlist_btn')
                            </div>
                        </div><!-- End box tour -->
                    </div>
                @endforeach

            </div><!-- End row -->

            <p class="text-center nopadding">
                <a href="{{url('tours')}}" class="btn_1 medium"><i
                            class="icon-eye-7"></i>@lang('reservation-touring::labels.touring.view_all_tours')
                    ({{\Corals\Modules\Entity\Models\Entry::count()}}) </a>
            </p>
        </div><!-- End container -->

        <div class="white_bg">
            <div class="container margin_60">
                <div class="main_title">
                    @lang('reservation-touring::labels.touring.other_popular_tours')
                </div>

                <div class="row d-flex justify-content-center add_bottom_45">
                    <div class="col-lg-6  other_tours" style="display: grid">
                        <ul>
                            @foreach(\Facades\Corals\Modules\Reservation\Classes\TouringReservations::getCategories() as $category)
                                <li><a href="{{url('tours?categories[]='.$category->presentStripTags('slug'))}}">
                                        <img alt="{{$category->name}}" src="{{$category->thumbnail}}">
                                        {{$category->name}}
                                        <span class="other_tours_price ml-2">{{\Facades\Corals\Modules\Reservation\Classes\TouringReservations::getCategoryMinPrice($category->id)}}</span></a>
                                </li>
                            @endforeach

                        </ul>
                    </div>
                </div>
                <!-- End row -->

                <div class="banner colored">
                    <h4>
                        @lang('reservation-touring::labels.touring.discover_our_top_tours')
                    </h4>
                    <p>
                        @lang('reservation-touring::labels.touring.discover_our_top_tours_description')

                    </p>
                    <a href="{{url('tours')}}"
                       class="btn_1 white">@lang('reservation-touring::labels.touring.discover')</a>
                </div>

                <div class="row">
                    @foreach(Facades\Corals\Modules\Reservation\Classes\TouringReservations::getRandomTours(false,4) as $tour)
                        <div class="col-lg-3 col-md-6 text-center">
                            <p>
                                <a href="{{url('tours',[$tour->presentStripTags('slug')])}}"><img
                                            src="{{$tour->media()->first() ? $tour->media()->first()->getFullUrl() :''}}"
                                            alt="Pic"
                                            class="img-fluid"></a>
                            </p>
                            <h4><span>{{$tour->presentStripTags('title')}}</span> tour</h4>
                            <p>
                                {{$tour->presentStripTags('description')}}
                            </p>
                        </div>
                    @endforeach

                </div>
                <!-- End row -->

            </div>
            <!-- End container -->
        </div>
        <!-- End white_bg -->


        @block(promo-video)

        <div class="container margin_60">
            @block(some-good-reasons)
            <hr/>
            @block(get-started-with-istanbul-tours)
        </div>
    </main>
@endsection

@section('js')
    {!! Html::script(asset('assets/corals/js/auto_complete_google_address.js')) !!}
@endsection