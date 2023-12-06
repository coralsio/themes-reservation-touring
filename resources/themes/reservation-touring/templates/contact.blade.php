@extends('layouts.master')

@section('content')


    <section class="parallax-window" data-parallax="scroll" data-image-src="{{$item->featured_image}}"
             data-natural-width="1400"
             data-natural-height="470">
        <div class="parallax-content-1">
            <div class="animated fadeInDown">
                <h1>{{$item->title}}</h1>
            </div>
        </div>
    </section>
    <!-- End Section -->

    <main>
        <div id="position">
            <div class="container">
                <ul>
                    <li><a href="{{url('/')}}">@lang('reservation-touring::labels.touring.home')</a>
                    </li>

                    <li>@lang('reservation-touring::labels.template.contact.contact_us')</li>
                </ul>
            </div>
        </div>
        <!-- End Position -->

        <div class="container margin_60">
            <div class="row">
                <div class="col-md-8">
                    <div class="form_title">
                        <h3>
                            <strong><i class="icon-pencil"></i></strong>@lang('reservation-touring::labels.touring.fill_the_form_below')
                        </h3>

                    </div>
                    <div class="step">

                        <div id="message-contact"></div>
                        <form method="post" action="{{ url('contact/email') }}"
                              data-page_action="clearContactForm"
                              class="ajax-form" id="contactform">

                            {{ csrf_field() }}

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group required-field">
                                        <label>@lang('reservation-touring::labels.touring.name')</label>
                                        <input type="text" class="form-control" id="name_contact" name="name"
                                               placeholder="@lang('reservation-touring::labels.touring.name')">
                                    </div>
                                </div>
                                <div class="col-sm-6">

                                    <div class="form-group">
                                        <label>@lang('reservation-touring::labels.touring.company_name')</label>

                                        <input type="text" name="company" class="form-control"
                                               placeholder="@lang('reservation-touring::labels.touring.company_name')">
                                    </div>
                                </div>
                            </div>
                            <!-- End row -->
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group required-field">
                                        <label>@lang('reservation-touring::labels.touring.email')</label>
                                        <input type="email" id="email_contact" name="email" class="form-control"
                                               placeholder="@lang('reservation-touring::labels.touring.email')">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>@lang('reservation-touring::labels.touring.phone_number')</label>
                                        <input type="text" id="phone_contact" name="phone" class="form-control"
                                               placeholder="@lang('reservation-touring::labels.touring.phone_number')">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group required-field">
                                        <label>@lang('reservation-touring::labels.touring.subject')</label>
                                        <input type="text" name="subject" class="form-control"
                                               placeholder="@lang('reservation-touring::labels.touring.subject')">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>@lang('reservation-touring::labels.touring.message')</label>
                                        <textarea rows="5" id="message_contact" name="message"
                                                  class="form-control" placeholder="@lang('reservation-touring::labels.touring.message')"
                                                  style="height:200px;"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group" style="position: relative">
                                    {!! NoCaptcha::display() !!}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">

                                    <button type="submit" class="btn_1" id="submit-contact">
                                        @lang('reservation-touring::labels.template.contact.submit_message')
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- End col-md-8 -->

                <div class="col-md-4">
                    <div class="box_style_1">
                        <span class="tape"></span>
                        <h4>@lang('reservation-touring::labels.touring.address') <span><i class="icon-pin pull-right"></i></span></h4>
                        <p>
                            {!!  \Settings::get('contact_address','Al-Masyoun, Ramallah, Palestine.')  !!}
                        </p>
                        <hr>
                        <h4>@lang('reservation-touring::labels.touring.need_help_label') <span><i class="icon-help pull-right"></i></span></h4>

                        <ul id="contact-info">
                            <li> {{ \Settings::get('contact_mobile','+970599593301') }}</li>
                            <li><a href="#">{{ \Settings::get('contact_form_email','support@example.com') }}</a>
                            </li>
                        </ul>
                    </div>
                    @include('partials.need_help')
                </div>
                <!-- End col-md-4 -->
            </div>
            <!-- End row -->

            <div class="row">
                <div style="position: relative;width: 100%;height: 400px">
                    <iframe src="{{ \Settings::get('google_map_url', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3387.331591494841!2d35.19981536504809!3d31.897586781246385!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x518201279a8595!2sLeaders!5e0!3m2!1sen!2s!4v1512481232226') }}"
                            width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>

        </div>
        <!-- End container -->


    </main>
@stop

@section('js')


    {!! NoCaptcha::renderJs() !!}

@endsection