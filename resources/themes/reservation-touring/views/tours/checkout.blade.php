@extends('layouts.master')

@section('css')
    {!! Theme::css('css/shop.css') !!}
@endsection

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

                <div class="col-4 bs-wizard-step active">
                    <div class="text-center bs-wizard-stepnum">@lang('reservation-touring::labels.touring.your_details')</div>
                    <div class="progress">
                        <div class="progress-bar"></div>
                    </div>
                    <a class="bs-wizard-dot"></a>
                </div>

                <div class="col-4 bs-wizard-step  disabled">
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
                    <li><a href="{{url('/')}}">@lang('reservation-touring::labels.touring.home')</a>
                    </li>
                    <li><a href="{{url('tours')}}">@lang('reservation-touring::labels.touring.tours')</a>
                    </li>
                    <li>{{$entry->presentStripTags('title')}}</li>
                </ul>
            </div>
        </div>
        <!-- End Position -->

        <div class="container margin_60">
            <div class="checkout-page">
                @guest
                    <ul class="default-links" id="exist-customer-wrapper">
                        <li>@lang('reservation-touring::labels.touring.existing_customer?') <a href="#"
                                                                                               class="exist-customer">@lang('reservation-touring::labels.touring.click_here_to_login')</a>
                        </li>
                    </ul>
                @endguest
                <form action="{{url("checkout/$reservation->hashed_id/$entry->hashed_id")}}" method="post"
                      id="payment-form"
                      class="ajax-form"
                      data-page_action="redirectTo"
                >
                    <div class="row">
                        <div class="col-lg-7">

                            <div class="billing-details">
                                <div class="shop-form">

                                    <div class="default-title">
                                        <h2>@lang('reservation-touring::labels.touring.billing_details') </h2>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12 required-field">
                                            <label>@lang('reservation-touring::labels.touring.first_name')
                                            </label>
                                            <input type="text" name="first_name" value="{{optional(user())->name}}"
                                                   placeholder=""
                                                   class="form-control">
                                        </div>

                                        <div class="form-group required-field col-md-6 col-sm-6 col-xs-12">
                                            <label>@lang('reservation-touring::labels.touring.last_name')
                                            </label>
                                            <input type="text" name="last_name" value="{{optional(user())->last_name }}"
                                                   placeholder=""
                                                   class="form-control">
                                        </div>

                                        <div class="form-group col-md-6 col-sm-6 col-xs-12 required-field">
                                            <label>@lang('reservation-touring::labels.touring.email') </label>
                                            <input type="email" name="email" value="{{optional(user())->email}}"
                                                   placeholder=""
                                                   class="form-control">
                                        </div>
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12 required-field">
                                            <label>@lang('reservation-touring::labels.touring.phone_number')</label>
                                            <input type="text" name="phone" value="{{optional(user())->phone}}"
                                                   placeholder=""
                                                   class="form-control">
                                        </div>

                                        <div class="terms-accept col-md-12">
                                            <div class="custom-checkbox form-group required-field">
                                                <input type="checkbox" id="terms_accept" name="terms">
                                                <label for="terms_accept">@lang('reservation-touring::labels.auth.agree')

                                                </label>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <!--End Billing Details-->
                        </div>
                        <!--End Col-->

                        <div class="col-lg-5">
                            <div class="your-order">
                                <div class="default-title">
                                    <h2>@lang('reservation-touring::labels.touring.your_order')</h2>
                                </div>
                                <ul class="orders-table">
                                    <li class="table-header clearfix">
                                        <div class="col">
                                            <strong>@lang('reservation-touring::labels.touring.the_tour')</strong>
                                        </div>
                                        <div class="col">
                                            <strong>@lang('reservation-touring::labels.touring.total')</strong>
                                        </div>
                                    </li>
                                    <li class="clearfix">
                                        <div class="col" style="text-transform:none;">
                                            <img src="{{$entry->media()->first()->getFullUrl()}}" width="50" height="50"
                                                 alt=""> {{$entry->presentStripTags('title')}}
                                        </div>
                                        <div class="col second" style="text-transform: lowercase">
                                       {{$reservation->quantity}}x    {!! Facades\Corals\Modules\Reservation\Classes\TouringReservations::getTourMainPrice($entry) !!}
                                        </div>
                                    </li>


                                    <li class="clearfix">
                                        <div class="col" style="text-transform:none;">
                                            @lang('reservation-touring::labels.touring.subtotal')
                                        </div>
                                        <div class="col second">
                                            {!! $invoice->present('sub_total') !!}
                                        </div>
                                    </li>
                                    <li class="clearfix total">
                                        <div class="col">
                                            <strong>@lang('reservation-touring::labels.touring.order_total')</strong>
                                        </div>
                                        <div class="col second">
                                            <strong>{!! $invoice->present('total') !!}</strong>
                                        </div>
                                    </li>
                                </ul>

                            </div>
                            <!--End Your Order-->

                            <div class="place-order">
                                <div class="default-title">
                                    <h2>@lang('reservation-touring::labels.touring.payment_method')</h2>
                                </div>

                                @include('views.tours.partials.payment')
                                <button type="submit" class="btn_full">
                                    @lang('reservation-touring::labels.touring.place_order')
                                    <i class="icon-left"></i>
                                </button>
                            </div>
                            <!--End Place Order-->

                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- End Container -->
    </main>
@endsection

@section('js')
    <script>
        if ($('.prod-tabs .tab-btn').length) {
            $('.prod-tabs .tab-btn').on('click', function (e) {
                e.preventDefault();
                var target = $($(this).attr('href'));
                $('.prod-tabs .tab-btn').removeClass('active-btn');
                $(this).addClass('active-btn');
                $('.prod-tabs .tab').fadeOut(0);
                $('.prod-tabs .tab').removeClass('active-tab');
                $(target).fadeIn(500);
                $(target).addClass('active-tab');
            });

        }

        @guest
        $('.exist-customer').on('click', function (e) {
            e.preventDefault();
            $('#login-modal').modal();
        });

        function loggedInSuccess(response) {
            $('#exist-customer-wrapper').remove();
            $('#login-modal').modal('hide');

            let user = response.user;

            $(`[name='first_name']`).val(user.name);
            $(`[name='last_name']`).val(user.last_name);
            $(`[name='email']`).val(user.email);
            $(`[name='phone']`).val(user.phone_number);

        }
        @endguest
    </script>
@endsection

@section('after_content')
    @component('components.modal',['id'=>'terms','header'=>\Settings::get('site_name').' Terms and policy'])
        {!! \Settings::get('terms_and_policy') !!}
    @endcomponent

    @guest
        @component('components.modal',['id'=>'login-modal','header'=>trans('reservation-touring::labels.auth.login')])


            <form method="post" action="{{route('login')}}" id="login-form" name="login-form" class="ajax-form" data-page_action="loggedInSuccess">
                {{csrf_field()}}

                @if(config('services.facebook.client_id'))
                    @php($showOr=true) @endphp

                    <a href="{{ route('auth.social', 'facebook') }}" class="social_bt facebook">
                        @lang('reservation-touring::labels.auth.sign_in_facebook')</a>
                @endif

                @if(config('services.google.client_id'))
                    @php($showOr=true) @endphp

                    <a href="{{ route('auth.social', 'google') }}" class="social_bt google">
                        @lang('reservation-touring::labels.auth.sign_in_google')</a>
                @endif

                @if(config('services.twitter.client_id'))
                    @php($showOr=true) @endphp
                    <a href="{{ route('auth.social', 'twitter') }}" class="social_bt twitter">
                        @lang('reservation-touring::labels.auth.sign_in_twitter')</a>
                @endif



                @isset($showOr)
                    <div class="divider"><span>@lang('reservation-touring::labels.touring.or')</span>
                    </div>
                @endisset

                <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                    <label>@lang('User::attributes.user.email')</label>
                    <input type="email" name="email" value="{{ old('email') }}" autofocus
                           class=" form-control " placeholder="@lang('User::attributes.user.email')">

                    @if ($errors->has('email'))
                        <div class="help-block">
                            {{ $errors->first('email') }}
                        </div>
                    @endif
                </div>
                <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                    <label>@lang('User::attributes.user.password')</label>
                    <input type="password" name="password" class=" form-control"
                           placeholder="@lang('User::attributes.user.password')">

                    @if ($errors->has('password'))
                        <div class="help-block">
                            {{ $errors->first('password') }}
                        </div>
                    @endif
                </div>

                <div class="">
                    <input type="checkbox" id="remember" name="remember"
                            {{ old('remember') ? 'checked' : '' }} >
                    <label for="remember" class="label-check">
                        <span class="checkbox tertiary"><span></span></span>
                        @lang('reservation-touring::labels.auth.remember_me')
                    </label>
                </div>
                <p class="small">
                    <a href="{{ route('password.request') }}">@lang('reservation-touring::labels.auth.forget_password')</a>
                </p>
                <button type="submit"
                        class="btn_full">@lang('reservation-touring::labels.auth.login')</button>
                <a href="{{url('register')}} "
                   class="btn_full_outline">@lang('reservation-touring::labels.auth.register')</a>
            </form>

        @endcomponent
    @endguest
@endsection