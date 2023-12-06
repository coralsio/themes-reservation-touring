@extends('layouts.master')

@section('content')
    <section id="hero_2" class="restaurant_bg"
             style="background: #4d536d url({{$entry->media()->first()->getFullUrl()}}) no-repeat center center">
        <div class="intro_title">
            <h1>{{$entry->presentStripTags('title')}}</h1>
            <div class="bs-wizard row">

                <div class="col-4 bs-wizard-step complete">
                    <div class="text-center bs-wizard-stepnum">@lang('reservation-touring::labels.touring.your_cart')</div>
                    <div class="progress">
                        <div class="progress-bar"></div>
                    </div>
                    <a class="bs-wizard-dot"></a>
                </div>

                <div class="col-4 bs-wizard-step complete">
                    <div class="text-center bs-wizard-stepnum">@lang('reservation-touring::labels.touring.your_details')</div>
                    <div class="progress">
                        <div class="progress-bar"></div>
                    </div>
                    <a class="bs-wizard-dot"></a>
                </div>

                <div class="col-4 bs-wizard-step complete">
                    <div class="text-center bs-wizard-stepnum">@lang('reservation-touring::labels.touring.finish')</div>
                    <div class="progress">
                        <div class="progress-bar"></div>
                    </div>
                    <a class="bs-wizard-dot"></a>
                </div>

            </div>
        </div>
    </section>

    <main>
        <div id="position">
            <div class="container">
                <ul>
                    <li><a href="#">@lang('reservation-touring::labels.touring.home')</a>
                    </li>
                    <li><a href="{{url('tours')}}">@lang('reservation-touring::labels.touring.tours')</a>
                    </li>
                    <li>{{$entry->presentStripTags('title')}}</li>
                </ul>
            </div>
        </div>
        <!-- End position -->

        <div class="container margin_60">
            <div class="row">
                <div class="col-lg-8 add_bottom_15">

                    <div class="form_title">
                        <h3>
                            <strong><i class="icon-ok"></i></strong>@lang('reservation-touring::labels.touring.thank_you')
                        </h3>
                        <p>
                            {{$entry->presentStripTags('caption')}}
                        </p>
                    </div>
                    <div class="step">
                        <h4>
                            @lang('reservation-touring::labels.touring.appointment_booked_successfully')
                        </h4>

                        <h5>
                            @lang('reservation-touring::labels.touring.reservation_code') :[ {{$reservation->code}}]
                        </h5>

                        {!! Facades\Corals\Modules\Reservation\Classes\TouringReservations::successCheckoutMessage($reservation,$entry) !!}
                    </div>
                    <!--End step -->

                    <div class="form_title">
                        <h3>
                            <strong><i class="icon-tag-1"></i></strong>@lang('reservation-touring::labels.touring.booking_summery')
                        </h3>
                        <p>
                            {{$entry->presentStripTags('caption')}}
                        </p>
                    </div>
                    <div class="step">
                        <table class="table table-striped confirm">
                            <tbody>
                            <tr>
                                <td>
                                    <strong>@lang('reservation-touring::labels.touring.name')</strong>
                                </td>
                                <td>
                                    {{$reservation->getProperty('contact_details')['first_name']}} {{$reservation->getProperty('contact_details')['last_name']}}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>@lang('reservation-touring::labels.touring.day')</strong>
                                </td>
                                <td>
                                    {{$reservation->starts_at->format('d F Y')}}
                                </td>
                            </tr>
                            <tr>
                                <td><strong>@lang('reservation-touring::labels.touring.time')</strong>
                                </td>
                                <td>
                                    {{$reservation->starts_at->format('H:i A')}}
                                    <br>
                                </td>
                            </tr>

                            <tr>
                                <td><strong>@lang('reservation-touring::labels.touring.quantity')</strong>
                                </td>
                                <td>
                                    {{$reservation->present('quantity')}}
                                    <br>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!--End step -->
                </div>
                <!--End col -->

                <aside class="col-lg-4">
                    <div class="box_style_1">
                        <h3 class="inner">@lang('reservation-touring::labels.touring.thank_you')</h3>
                        <p>
                            @lang('reservation-touring::labels.touring.tour_notes')
                        </p>
                        <hr>
                        <a class="btn_full_outline" href="{{$publicInvoiceURL}}"
                           target="_blank">@lang('reservation-touring::labels.touring.view_your_invoice')</a>
                    </div>
                    <div class="box_style_4">
                        <i class="icon_set_1_icon-89"></i>
                        @lang('reservation-touring::labels.touring.have_question')
                        <a href="tel://{{ \Settings::get('contact_mobile','+970599593301') }}"
                           class="phone">{{ \Settings::get('contact_mobile','+970599593301') }}</a>
                        <small>Monday to Friday 9.00am - 7.30pm</small>
                    </div>
                </aside>

            </div>
            <!--End row -->
        </div>
        <!--End container -->
    </main>

@endsection