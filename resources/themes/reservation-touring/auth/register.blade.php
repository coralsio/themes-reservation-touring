@extends('layouts.master')

@section('title',trans('reservation-touring::labels.auth.register'))

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
                    <div class="col-xl-5 col-lg-6 col-md-6 col-sm-8">
                        <div id="login">


                            <div class="text-center"><img src="{{\Corals\Settings\Facades\Settings::get('site_logo')}}"
                                                          alt="Image" width="160" height="34">
                            </div>

                            <hr>

                            <form method="post" action="{{ route('register') }}" class="ajax-form" name="register-form">
                                {{csrf_field()}}


                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                                            <label>@lang('User::attributes.user.name')</label>
                                            <input type="text" name="name" value="{{ old('name') }}" autofocus
                                                   class=" form-control "
                                                   placeholder="@lang('User::attributes.user.name')">

                                            @if ($errors->has('name'))
                                                <div class="help-block">
                                                    {{ $errors->first('name') }}
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group {{ $errors->has('last_name') ? ' has-error' : '' }}">
                                            <label>@lang('User::attributes.user.last_name')</label>
                                            <input type="text" name="last_name" value="{{ old('last_name') }}" autofocus
                                                   class=" form-control "
                                                   placeholder="@lang('User::attributes.user.last_name')">

                                            @if ($errors->has('last_name'))
                                                <div class="help-block">
                                                    {{ $errors->first('last_name') }}
                                                </div>
                                            @endif
                                        </div>

                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-12">

                                        <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                            <label>@lang('User::attributes.user.email')</label>
                                            <input type="email" name="email" value="{{ old('email') }}" autofocus
                                                   class=" form-control "
                                                   placeholder="@lang('User::attributes.user.email')">

                                            @if ($errors->has('email'))
                                                <div class="help-block">
                                                    {{ $errors->first('email') }}
                                                </div>
                                            @endif
                                        </div>
                                    </div>

                                </div>


                                <div class="row">
                                    <div class="col-md-6">
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

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                            <label>@lang('User::attributes.user.retype_password')</label>
                                            <input type="password" name="password_confirmation" class=" form-control"
                                                   placeholder="@lang('User::attributes.user.retype_password')">

                                            @if ($errors->has('password_confirmation'))
                                                <div class="help-block">
                                                    {{ $errors->first('password_confirmation') }}
                                                </div>
                                            @endif
                                        </div>

                                    </div>
                                </div>


                                <div class="form-group ">
                                    <input type="checkbox" id="remember" name="terms" value="1"
                                            {{ old('terms') ? 'checked' : '' }} >
                                    <label for="remember" class="label-check">
                                        <span class="checkbox tertiary"><span></span></span>
                                        @lang('corals-admin::labels.auth.agree') <a href="#" data-toggle="modal"
                                                                                    id="terms-anchor"
                                                                                    data-target="#terms">@lang('corals-admin::labels.auth.terms')</a>
                                    </label>
                                </div>
                                @if ($errors->has('terms'))
                                    <span class="help-block"><strong>@lang('corals-admin::labels.auth.accept_terms')</strong></span>
                                @endif


                                <button type="submit"
                                        class="btn_full">@lang('reservation-touring::labels.auth.register')
                                </button>

                                <a href="{{route('login')}}"
                                   class="btn_full_outline">@lang('reservation-touring::labels.auth.already_have_account')</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@section('after_content')
    @component('components.modal',['id'=>'terms','header'=>\Settings::get('site_name').' Terms and policy'])
        {!! \Settings::get('terms_and_policy') !!}
    @endcomponent
@endsection