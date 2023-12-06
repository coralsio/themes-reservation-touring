@extends('layouts.master')

@section('title','Dashboard')

@section('css')
    {!! Theme::css('css/admin.css') !!}

@endsection

@section('content')

    <section class="parallax-window" data-parallax="scroll" data-natural-width="100"
             style="height: 100px;min-height: 100px"
             data-natural-height="100">
    </section>


    <main>
        <div id="position">
            <div class="container">
                <ul>
                    <li><a href="{{url('/')}}">@lang('reservation-touring::labels.touring.home')</a>
                    </li>
                    <li>@lang('reservation-touring::labels.touring.dashboard')</li>
                </ul>
            </div>
        </div>
        <!-- End Position -->

        <div class="margin_60 container">
            <div id="tabs" class="tabs">
                <nav>
                    <ul>
                        <li><a href="#reservations"
                               class="icon-booking"><span>@lang('reservation-touring::labels.touring.bookings')</span></a>
                        </li>
                        <li><a href="#wishlists"
                               class="icon-wishlist"><span>@lang('reservation-touring::labels.touring.wishlists')</span></a>
                        </li>

                    </ul>
                </nav>
                <div class="content">

                    <section id="reservations">
                    {{--                        <div id="tools">--}}
                    {{--                            <div class="row">--}}
                    {{--                                <div class="col-lg-2 col-md-3 col-6">--}}
                    {{--                                    <div class="styled-select-filters">--}}
                    {{--                                        <select name="sort_type" id="sort_type">--}}
                    {{--                                            <option value="" selected>Sort by type</option>--}}
                    {{--                                            <option value="tours">Tours</option>--}}
                    {{--                                            <option value="hotels">Hotels</option>--}}
                    {{--                                            <option value="transfers">Transfers</option>--}}
                    {{--                                        </select>--}}
                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                                <div class="col-lg-2 col-md-3 col-6">--}}
                    {{--                                    <div class="styled-select-filters">--}}
                    {{--                                        <select name="sort_date" id="sort_date">--}}
                    {{--                                            <option value="" selected>Sort by date</option>--}}
                    {{--                                            <option value="oldest">Oldest</option>--}}
                    {{--                                            <option value="recent">Recent</option>--}}
                    {{--                                        </select>--}}
                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    <!--/tools -->

                        <div class="strip_booking">
                            @forelse(\Facades\Corals\Modules\Reservation\Classes\TouringReservations::getUserReservations() as $reservation)
                                <div class="row">
                                    <div class="col-lg-2 col-md-2">
                                        <div class="date">
                                            <span class="month">{{$reservation->starts_at->format('M')}}</span>
                                            <span class="day"><strong>{{$reservation->starts_at->day}}</strong>{{$reservation->starts_at->format('D')}}</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-5">
                                        <h3 class="tours_booking">
                                            {{$reservation->values['title']}}
                                        </h3>
                                    </div>
                                    <div class="col-lg-2 col-md-3">
                                        <ul class="info_booking">
                                            <li>
                                                <strong>@lang('reservation-touring::labels.touring.reservation_code')</strong> {{$reservation->code}}
                                            </li>
                                            <li>
                                                <strong>@lang('reservation-touring::labels.touring.booking_date')</strong> {{$reservation->starts_at->format('D. d M. Y')}}
                                            </li>
                                        </ul>
                                    </div>


                                    <div class="col-lg-2 col-md-2">
                                        @lang('reservation-touring::labels.touring.status') :    {!!  $reservation->present('status') !!}

                                        @can('cancel',$reservation)
                                            <div class="booking_buttons">
                                                <a href="{{url('reservations/cancel',$reservation->hashed_id)}}"
                                                   data-action="post"
                                                   data-page_action="site_reload"
                                                   data-confirmation="want to cancel {{$reservation->code }} ?"
                                                   class="btn_3">@lang('reservation-touring::labels.touring.cancel')</a>
                                            </div>
                                        @endif

                                    </div>

                                </div>

                                @if(!$loop->last)
                                    <hr>
                                @endif
                            @empty
                                <div class="col-md-12 text-center">
                                    <strong>
                                        @lang('reservation-touring::labels.touring.no_reservations_yet')
                                    </strong>
                                </div>

                            @endforelse
                        </div>

                    </section>
                    <!-- End section 1 -->

                    <section id="wishlists">
                        <div class="row">
                            @forelse($userWishlists as $wishlist)
                                @php($tour=$wishlist->wishlistable)
                                @php($category=$tour->categories()->first())
                                <div class="col-lg-4 col-md-6">
                                    <div class="tour_container">
                                        <div class="ribbon_3 popular"><span>Popular</span></div>
                                        <div class="img_container">
                                            <a href="{{url('tours',[$tour->presentStripTags('slug')])}}">
                                                <img src="{{$tour->media()->first() ? $tour->media()->first()->getFullUrl() :''}}"
                                                     width="800"
                                                     height="533"
                                                     class="img-fluid" alt="Image">
                                                <div class="short_info">
                                                    <i class="icon_set_1_icon-44"></i>{{$category->name}}<span
                                                            class="price"><sup>$</sup>{{\Facades\Corals\Modules\Reservation\Classes\TouringReservations::getTourMainPrice($tour)}}</span>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="tour_title">
                                            <h3><strong>{{$tour->presentStripTags('title')}}</strong> tour</h3>
                                            <div class="rating">
                                                @include('views.tours.partials.avg_rating')
                                            </div><!-- end rating -->
                                            @include('views.tours.partials.wishlist_btn')

                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div class="col-md-12 text-center">
                                    <strong>
                                        @lang('reservation-touring::labels.touring.no_wishlists_yet')
                                    </strong>
                                </div>
                            @endforelse
                        </div>
                    </section>
                </div>
                <!-- End content -->
            </div>
            <!-- End tabs -->
        </div>
        <!-- end container -->
    </main>
@endsection

@section('js')
    {!! Theme::js('js/tabs.js') !!}

    <script>
        new CBPFWTabs(document.getElementById('tabs'));
    </script>
@endsection