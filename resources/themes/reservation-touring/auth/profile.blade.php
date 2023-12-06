@extends('layouts.master')


@section('title',$title)

@section('css')
    {!! \Html::style('assets/corals/plugins/cropper/cropper.css') !!}
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
                    <li>@lang('reservation-touring::labels.touring.profile')</li>
                </ul>
            </div>
        </div>
        <!-- End Position -->

        <div class="margin_60 container">
            <div id="tabs" class="tabs">
                <nav>
                    <ul>
                        <li><a href="#profile" class="icon-profile"><span>Profile</span></a>
                        </li>


                    </ul>
                </nav>
                <div class="">

                    <section id="profile">
                        <div class="row">
                            <div class="col-md-12">
                                {!! CoralsForm::openForm($user = user(), ['url' => url('profile'), 'method'=>'PUT','class'=>'ajax-form','files'=>true]) !!}
                                <ul class="nav nav-pills mt-2 nav-tabs">
                                    <li class="nav-item"><a href="#edit_profile" class="nav-link active"
                                                            data-toggle="tab"
                                                            aria-expanded="false">
                                            <i class="fa fa-pencil"></i> @lang('reservation-touring::labels.auth.edit_profile')
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#profile_addresses" class="nav-link" data-toggle="tab"><i
                                                    class="fa fa-map-marker"></i>
                                            @lang('reservation-touring::labels.auth.addresses')</a>

                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#reset_password" class="nav-link" data-toggle="tab"><i
                                                    class="fa fa-lock"></i>
                                            @lang('reservation-touring::labels.auth.auth_password')</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#notification_preferences" class="nav-link" data-toggle="tab"><i
                                                    class="fa fa-bell-o"></i>
                                            @lang('reservation-touring::labels.auth.notification_preferences')

                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content py-3">
                                    <div class="tab-pane active" id="edit_profile">
                                        <div class="row">
                                            <div class="col-md-4">
                                                {!! CoralsForm::text('name','User::attributes.user.name',true) !!}
                                                {!! CoralsForm::email('email','User::attributes.user.email',true) !!}
                                                {!! CoralsForm::textarea('properties[about]', 'User::attributes.user.about' , false, null,[
                                                'class'=>'limited-text',
                                                'maxlength'=>250,
                                                'help_text'=>'<span class="limit-counter">0</span>/250',
                                                'rows'=>'4']) !!}
                                            </div>
                                            <div id="country-div" class="col-md-4">
                                                {!! CoralsForm::text('last_name','User::attributes.user.last_name',true) !!}
                                                {!! CoralsForm::text('phone_country_code','User::attributes.user.phone_country_code',false,null,['id'=>'authy-countries']) !!}
                                                {!! CoralsForm::text('phone_number','User::attributes.user.phone_number',false,null,['id'=>'authy-cellphone']) !!}
                                                {!! CoralsForm::text('job_title','User::attributes.user.job_title') !!}
                                            </div>
                                            <div class="col-md-4">
                                                <div class="text-center">
                                                    <img id="image_source"
                                                         class="profile-user-img img-responsive img-circle"
                                                         style="width: 200px"
                                                         src="{{ user()->picture }}"
                                                         alt="User profile picture">
                                                    {{ CoralsForm::hidden('profile_image') }}
                                                    <small class="d-block">@lang('reservation-touring::labels.auth.click_pic_update')</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="profile_addresses">
                                        @include('Settings::addresses.address_list_form', [
                                        'url'=>url('users/'.$user->hashed_id.'/address'),'method'=>'POST',
                                        'model'=>$user,
                                        'addressDiv'=>'#profile_addresses'
                                        ])
                                    </div>
                                    <div class="tab-pane" id="notification_preferences">
                                        @forelse(\CoralsNotification::getUserNotificationTemplates(user()) as $notifications_template)
                                            <div class="row">
                                                <div class="col-md-12">
                                                    {!! CoralsForm::checkboxes(
                                                    'notification_preferences['.$notifications_template->id .'][]',
                                                    $notifications_template->friendly_name,
                                                    false, $options = get_array_key_translation(config('notification.supported_channels')),
                                                    $selected = $user->notification_preferences[$notifications_template->id] ?? [],
                                                    ['checkboxes_wrapper'=>'span', 'label'=>['class' => 'm-r-10']])
                                                    !!}
                                                </div>
                                            </div>
                                        @empty
                                            <div class="alert alert-info"><h5
                                                        class="text-center">@lang('reservation-touring::labels.auth.no_notification')</h5>
                                            </div>
                                        @endforelse
                                    </div>
                                    <div class="tab-pane" id="reset_password">
                                        <div class="row">
                                            <div class="col-md-4">
                                                {!! CoralsForm::password('password','User::attributes.user.password') !!}
                                                {!! CoralsForm::password('password_confirmation','User::attributes.user.password_confirmation') !!}

                                                @if(\TwoFactorAuth::isActive())
                                                    {!! CoralsForm::checkbox('two_factor_auth_enabled','User::attributes.user.two_factor_auth_enabled',\TwoFactorAuth::isEnabled($user)) !!}

                                                    @if(!empty(\TwoFactorAuth::getSupportedChannels()))
                                                        {!! CoralsForm::radio('channel','User::attributes.user.channel', false,\TwoFactorAuth::getSupportedChannels(),\Arr::get($user->getTwoFactorAuthProviderOptions(),'channel', null)) !!}
                                                    @endif
                                                @endif
                                            </div>
                                            <div class="col-md-6 text-center">
                                                <i class="fa fa-lock" style="color:#7777770f; font-size: 10em;"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">

                                <div class="row">
                                    <div class="col-md-12">
                                        {!! CoralsForm::formButtons(trans('reservation-touring::labels.auth.save',['title' => $title_singular]),[],['href'=>url('dashboard')]) !!}
                                    </div>
                                    {!! CoralsForm::closeForm() !!}
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- End section 1 -->

                </div>
                <!-- End content -->
            </div>
            <!-- End tabs -->
        </div>
        <!-- end container -->
    </main>

    @include('User::users.profile.cropper_modal')

@endsection
@section('js')
    @include('User::users.profile.scripts')

    {!! Theme::js('js/tabs.js') !!}

    <script>
        new CBPFWTabs(document.getElementById('tabs'));
    </script>


    <script>
        $('header').addClass('sticky');
    </script>
@endsection
