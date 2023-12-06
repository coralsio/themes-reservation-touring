@forelse($tours as $index => $tour)
    <div class="strip_all_tour_list wow fadeIn" data-wow-delay="0.2s">
        <div class="row" style="min-height:233px">
            <div class="col-lg-4 col-md-4">
                @if(data_get($tour['values'],'is_featured',false))
                    <div class="ribbon_3 popular"><span>Popular</span>
                    </div>
                @endif
                @include('views.tours.partials.wishlist_btn')
                @php
                    $category =$tour->categories()->first();
                @endphp
                <div class="img_list">
                    <a href="{{url("tours",[$tour->presentStripTags('slug')])}}"><img
                                src="{{$tour->media()->first() ? $tour->media()->first()->getFullUrl() :''}}"
                                alt="Image">
                        <div class="short_info">

                            {{--                            <i class="icon_set_1_icon-4"></i>--}}
                            {{$category->name}}
                        </div>
                    </a>
                </div>
            </div>
            <div class=" col-lg-6 col-md-6">
                <div class="tour_list_desc">
                    <div class="rating">
                        @include('views.tours.partials.avg_rating')
                    </div>

                    <a href="{{url("tours",[$tour->presentStripTags('slug')])}}"
                       class="tour_title"><strong>{{$tour->presentStripTags('title')}}</strong> @lang('reservation-touring::labels.touring.tour')
                    </a>
                    </h3>
                    <p>{{$tour->presentStripTags('description')}}</p>
                    <ul class="add_info">
                        <li>
                            <div class="tooltip_styled tooltip-effect-4">
                                <span class="tooltip-item"><i class="icon_set_1_icon-83"></i></span>
                                <div class="tooltip-content">
                                    <h4>Schedule</h4>

                                    <div class="table-responsive">
                                        <table class="table table-striped" style="color: white">

                                            <tbody>
                                            {!! \Facades\Corals\Modules\Reservation\Classes\TouringReservations::getTourSchedule($tour) !!}
                                            بيث
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="tooltip_styled tooltip-effect-4">
                                <span class="tooltip-item"><i class="icon_set_1_icon-41"></i></span>
                                <div class="tooltip-content">
                                    <h4>Address</h4>
                                    {{    \Facades\Corals\Modules\Reservation\Classes\TouringReservations::getTourService($tour)->getProperty('address')}}
                                    <br>
                                </div>
                            </div>
                        </li>

                        @foreach($tour->tags as $tag)
                            <li>
                                <div class="tooltip_styled tooltip-effect-4">
                                                        <span class="tooltip-item"><i
                                                                    class="{{$tag->getProperty('icon')}}"></i></span>
                                    <div class="tooltip-content">
                                        {{$tag->name}}
                                    </div>
                                </div>
                            </li>

                        @endforeach


                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-2">
                <div class="price_list">

                    <div>
                        {{\Facades\Corals\Modules\Reservation\Classes\TouringReservations::getTourMainPrice($tour)}}
                        <span class="normal_price_list"></span>
                        <small>*Per person</small>
                        <p><a href="{{url("tours",[$tour->presentStripTags('slug')])}}"
                              class="btn_1">@lang('reservation-touring::labels.touring.details')</a>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
@empty
    <div class="row">
        <div class="col-md-12 text-center">
            <h4>
                @lang('reservation-touring::labels.touring.no_tours_found')
            </h4>
        </div>
    </div>
@endforelse