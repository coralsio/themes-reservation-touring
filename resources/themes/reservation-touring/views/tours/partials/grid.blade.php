@foreach($tours->chunk(2) as $toursChunk)
    <div class="row">
        @foreach($toursChunk as $tour)
            <div class="col-md-6 wow zoomIn" data-wow-delay="0.2s">
                <div class="tour_container">
                    @if(data_get($tour['values'],'is_featured',false))
                        <div class="ribbon_3 popular"><span>Popular</span>
                        </div>
                    @endif

                    @php
                        $category =$tour->categories()->first();
                    @endphp
                    <div class="img_container">
                        <a href="{{url("tours",[  $tour->presentStripTags('slug') ] ) }}">
                            <img src="{{ $tour->media()->first() ? $tour->media()->first()->getFullUrl() :''  }}" width="800" height="533" class="img-fluid" alt="Image">
                            <div class="short_info">
{{--                                <i class="icon_set_1_icon-44"></i>--}}
                                {{$category->name}}<span
                                        class="price">{{\Facades\Corals\Modules\Reservation\Classes\TouringReservations::getTourMainPrice($tour)}}</span>
                            </div>
                        </a>
                    </div>
                    <div class="tour_title">
                        <h3><strong>{{$tour->presentStripTags('title')}}</strong> @lang('reservation-touring::labels.touring.tour')</h3>
                        <div class="rating">
                           @include('views.tours.partials.avg_rating')
                        </div>
                        <!-- end rating -->
                        @include('views.tours.partials.wishlist_btn')


                    </div>
                        <!-- End wish list-->
                    </div>
                </div>
                <!-- End box tour -->
            </div>
        @endforeach
    </div>
@endforeach