@extends('layouts.master')

@section('title','Rest Password')
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
                            <form method="post" action="{{ route('password.email') }}" id="login-form"
                                  name="login-form">

                                @if (session('status'))
                                    <div class="alert alert-success">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                {{csrf_field()}}


                                <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label>@lang('User::attributes.user.email')</label>
                                    <input type="email" name="email" value="{{ old('email') }}" autofocus
                                           class=" form-control " placeholder="@lang('User::attributes.user.email')">

                                    @if ($errors->has('email'))
                                        <div class="help-block">
                                            {{ $errors->first('email') }}                                        </div>
                                    @endif
                                </div>


                                <a onclick="document.forms['login-form'].submit();return;"
                                   class="btn_full">@lang('reservation-touring::labels.auth.send_password_reset')</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
