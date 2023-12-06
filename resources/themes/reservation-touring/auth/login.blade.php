@extends('layouts.master')

@section('title',trans('reservation-touring::labels.auth.login'))

@section('css')
    <style type="text/css">
        @if($background = \Settings::get('login_background'))
            {!! '#hero.login {'.$background.'}' !!}
        @endif
    </style>
@endsection
@section('content')
    <main>
        <section id="hero" class="login">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-lg-5 col-md-6 col-sm-8">
                        <div id="login">
                            @php \Actions::do_action('pre_login_form') @endphp


                            <div class="text-center"><img src="{{\Corals\Settings\Facades\Settings::get('site_logo')}}"
                                                          alt="Image" width="160" height="34">
                            </div>

                            <div class="form-group text-center">

                                @if(session('confirmation_user_id'))
                                    <a href="{{ route('auth.resend_confirmation') }}">@lang('User::labels.confirmation.resend_email')</a>
                                @endif
                            </div>

                            <hr>
                            <form method="post" action="{{route('login')}}" id="login-form" name="login-form">
                                {{csrf_field()}}

                                @if(config('services.facebook.client_id'))
                                    @php($showOr=true) @endphp

                                    <a href="{{ route('auth.social', 'facebook') }}" class="social_bt facebook">
                                        @lang('reservation-touring::labels.auth.sign_in_facebook')</a>
                                @endif

                                @if(config('services.google.client_id'))
                                    @php($showOr=true)@endphp

                                    <a href="{{ route('auth.social', 'google') }}" class="social_bt google">
                                        @lang('reservation-touring::labels.auth.sign_in_google')</a>
                                @endif

                                @if(config('services.twitter.client_id'))
                                    @php($showOr=true)@endphp
                                    <a href="{{ route('auth.social', 'twitter') }}" class="social_bt twitter">
                                        @lang('reservation-touring::labels.auth.sign_in_twitter')</a>
                                @endif



                                @isset($showOr)
                                    <div class="divider"><span>@lang('reservation-touring::labels.touring.or')</span>
                                    </div>
                                @endisset

                                <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label>@lang('User::attributes.user.email')</label>
                                    <input type="email" name="email" value="{{ old('email') }}" autofocus id="email"
                                           class=" form-control " placeholder="@lang('User::attributes.user.email')">

                                    @if ($errors->has('email'))
                                        <div class="help-block">
                                            {{ $errors->first('email') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label>@lang('User::attributes.user.password')</label>
                                    <input type="password" name="password" class=" form-control" id="password"
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
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection


