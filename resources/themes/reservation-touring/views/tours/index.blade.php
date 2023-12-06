@extends('layouts.master')

@section('content')

    <section class="parallax-window" data-parallax="scroll" data-image-src="{{$item->featured_image}}"
             data-natural-width="1400"
             data-natural-height="470">
        <div class="parallax-content-1">

            {!! $item->rendered !!}
        </div>
    </section>
    <!-- End section -->

    <main>

        <div id="position">
            <div class="container">
                <ul>
                    <li><a href="{{url('/')}}">@lang('reservation-touring::labels.touring.home')</a>
                    </li>
                    <li>@lang('reservation-touring::labels.touring.tours')</li>
                </ul>
            </div>
        </div>
        <!-- Position -->

        <div class="collapse" id="collapseMap">
            <div id="map" class="map"></div>
        </div>
        <!-- End Map -->


        <div class="container margin_60">
            <form name="filtersForm">
                <div class="row">
                    <aside class="col-lg-3">
                        <p>
                            <a class="btn_map" data-toggle="collapse" href="#collapseMap" aria-expanded="false"
                               aria-controls="collapseMap"

                               data-text-swap="@lang('reservation-touring::labels.touring.hide_map')"
                               data-text-original="@lang('reservation-touring::labels.touring.view_on_map')">
                                @lang('reservation-touring::labels.touring.view_on_map')
                            </a>
                        </p>


                        <div class="box_style_cat">
                            <ul id="cat_nav">

                                <li>
                                    <a class="{{count(request('categories',[])) ? '':'active'}}">

                                        <input type="checkbox" name="categories[]"
                                               id="all"
                                               value="all" {{in_array('all',request('categories',[])) ? 'checked':''}}>

                                        <label for="all">
                                            <i class="icon_set_1_icon-51"></i>@lang('reservation-touring::labels.touring.all_tours')
                                            <span>({{\Facades\Corals\Modules\Reservation\Classes\TouringReservations::getCategoryTouringCount()}})</span>
                                        </label>
                                    </a>

                                </li>
                                @foreach(\Facades\Corals\Modules\Reservation\Classes\TouringReservations::getCategories() as $category)

                                    <li>
                                        <a class="{{in_array($category->slug,request('categories',[])) ? 'active':''}}">
                                            <input type="checkbox" name="categories[]"
                                                   id="{{$category->slug}}"
                                                   value="{{$category->slug}}" {{in_array($category->slug,request('categories',[])) ? 'checked':''}}>

                                            <label for="{{$category->slug}}">
                                                <img src="{{$category->thumbnail}}" style="width: 20px;height: 20px">

                                                {{$category->name}}
                                                <span>({{\Facades\Corals\Modules\Reservation\Classes\TouringReservations::getCategoryTouringCount($category->slug)}})
                                             </span>

                                            </label>
                                        </a>

                                    </li>

                                @endforeach
                            </ul>
                        </div>


                        <div id="filters_col">
                            <a data-toggle="collapse" href="#collapseFilters" aria-expanded="false"
                               aria-controls="collapseFilters" id="filters_col_bt"><i class="icon_set_1_icon-65"></i>
                                @lang('reservation-touring::labels.touring.filters')
                            </a>
                            <div class="collapse show" id="collapseFilters">
                                <div class="filter-type">

                                    <input type="text" class="form-control" id="firstname_booking"
                                           name="term"
                                           value="{{request('term')}}"
                                           placeholder="@lang('reservation-touring::labels.touring.search_term_placeholder')">
                                </div>

                                <div class="filter_type">
                                    <h6>@lang('reservation-touring::labels.touring.price')</h6>
                                    @php
                                        [$from,$to] = explode(';',request('price','0;100'))
                                    @endphp
                                    <input type="text" id="range" name="price" value="" data-from="{{$from}}"
                                           data-to="{{$to}}">
                                </div>
                                <div class="filter_type">
                                    <h6>@lang('reservation-touring::labels.touring.rating')</h6>
                                    <ul>
                                        @for($i=1;$i<=5;$i++)


                                            <li>
                                                <label>
                                                    <input type="checkbox" name="rating[]"
                                                           value="{{$i}}" {{in_array($i,request('rating',[])) ? 'checked':''}}>
                                                    <span class="rating">
                                                             @for($j=1;$j<=5;$j++)
                                                            <i class="icon-smile {{$j <= $i ?'voted':''}}"></i>
                                                        @endfor

											</span>
                                                </label>
                                            </li>

                                        @endfor

                                    </ul>
                                </div>
                                <div class="filter_type">
                                    <h6>@lang('reservation-touring::labels.touring.facility')</h6>
                                    <ul>
                                        @foreach(\Facades\Corals\Modules\Reservation\Classes\TouringReservations::getTags() as $tag)
                                            <li>
                                                <label>
                                                    <input type="checkbox" name="tags[]"
                                                           value="{{$tag->slug}}" {{  in_array($tag->slug,request('tags',[]) ) ? 'checked':'' }}>{{$tag->name}}
                                                </label>
                                            </li>
                                        @endforeach

                                    </ul>
                                </div>
                            </div>
                            <!--End collapse -->
                        </div>

                        <a type="submit" onclick="document.forms['filtersForm'].submit(); return false;"
                           class="btn_map mb-2">
                            <input type="submit" class="d-none">
                            @lang('reservation-touring::labels.touring.filter')
                        </a>


                        <!--End filters col-->
                        @include('partials.need_help',['boxStyle'=>2])
                    </aside>
                    <!--End aside -->
                    <div class="col-lg-9">

                        <div id="tools">
                            <div class="row">
                                <div class="col-md-3 col-sm-4 col-6">
                                    <div class="styled-select-filters">
                                        <select name="sort" id="sort_price">
                                            <option value=""
                                                    selected>@lang('reservation-touring::labels.template.shop.sort')</option>
                                            <option value="lowest_price" {{request('sort') =='lowest_price'?'selected':''}}>
                                                @lang('reservation-touring::labels.template.shop.lowest_price')
                                            </option>
                                            <option value="highest_price" {{request('sort') =='highest_price'?'selected':''}} >
                                                @lang('reservation-touring::labels.template.shop.highest_price')
                                            </option>

                                            <option value="lowest_ranking" {{request('sort') =='lowest_ranking'?'selected':''}}>
                                                @lang('reservation-touring::labels.template.shop.lowest_ranking')
                                            </option>
                                            <option value="highest_ranking" {{request('sort') =='highest_ranking'?'selected':''}}>
                                                @lang('reservation-touring::labels.template.shop.highest_ranking')
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                {{--                                <div class="col-md-3 col-sm-4 col-6">--}}
                                {{--                                    <div class="styled-select-filters">--}}
                                {{--                                        <select name="sort" id="sort_rating">--}}
                                {{--                                            <option value="" selected>Sort by ranking</option>--}}
                                {{--                                            <option value="lowest_ranking" {{request('sort') =='lowest_ranking'?'selected':''}}>--}}
                                {{--                                                Lowest ranking--}}
                                {{--                                            </option>--}}
                                {{--                                            <option value="highest_raking" {{request('sort') =='highest_raking'?'selected':''}}>--}}
                                {{--                                                Highest ranking--}}
                                {{--                                            </option>--}}
                                {{--                                        </select>--}}
                                {{--                                    </div>--}}
                                {{--                                </div>--}}

                                @php
                                    $urlParameters =request()->toArray();
                                @endphp


                                <div class="col-md-6 col-sm-4 d-none d-sm-block text-right ml-auto">
                                    <a href="{{request()->fullUrlWithQuery( \Illuminate\Support\Arr::set($urlParameters,'type','grid'))}}"
                                       class="bt_filters">

                                        <i class="icon-th"></i></a> <a
                                            href="{{request()->fullUrlWithQuery( \Illuminate\Support\Arr::set($urlParameters,'type','list'))}}"
                                            class="bt_filters"><i
                                                class=" icon-list"></i></a>
                                </div>

                            </div>
                        </div>

                        @if(in_array(request('type','list'),['list','grid']))
                            @include("views.tours.partials.".request('type','list'))
                        @else
                            @include("views.tours.partials.list")
                        @endif

                        <hr>

                        {!! $tours->withQueryString()->links(('partials.paginator')) !!}
                    </div>
                </div>
            </form>
        </div>
    </main>
@endsection

@section('js')
    <script>
        $(`[name='sort']`).on('change', function () {
            $(this).closest('form').submit();
        });

    </script>

    <script src='https://maps.googleapis.com/maps/api/js?key={{ \Settings::get('utility_google_address_api_key') }}&libraries=places'></script>

    {!! Theme::js('js/map.js') !!}
    {!! Theme::js('js/infobox.js') !!}
@endsection
