<footer class="revealed">
    <div class="container">
        <div class="row">
            <div class="col-md-2 m-auto">
                <a href="{{url('/')}}">
                    <img style="max-width: 100%" src="{{Settings::get('site_logo')}}">
                </a>
            </div>

            <div class="col-md-4">
                <h3>@lang('reservation-touring::labels.touring.need_help_label')</h3>
                <a href="tel://{{ \Settings::get('contact_mobile','+970599593301') }}"
                   id="phone">{{ \Settings::get('contact_mobile','+970599593301') }}</a>
                <a href="mailto:help@Istanbul Tours.com"
                   id="email_footer">{{ \Settings::get('contact_form_email','support@example.com') }}</a>
            </div>
            <div class="col-md-3">
                <ul>
                    @foreach(Menus::getMenu('frontend_footer','active') as $menu)
                        @continue(!$menu->user_can_access)
                        <li><a href="{{url($menu->url)}}">{{$menu->name}}</a></li>
                    @endforeach
                </ul>
            </div>


            <div class="col-md-2">
                <h3>@lang('reservation-touring::labels.touring.settings')</h3>
                <div class="styled-select">
                    <select name="lang" id="lang">

                        @foreach (\Language::allowed() as $code => $name)
                            <option value="{{ \Language::getLocaleUrl($code) }}" {{app()->getLocale() == $code ?'selected':''}}>
                                {{$name}}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="styled-select">
                    @php
                        $urlParameters =request()->toArray();
                    @endphp
                    <select name="currency" id="currency">
                         @foreach(\Corals\Modules\Payment\Facades\Currency::getActiveCurrencies() as $key => $currency)

                            <option value="{{  request()->fullUrlWithQuery( \Illuminate\Support\Arr::set($urlParameters,'currency',$key)) }}"
                                    {{$key == \Currency::getUserCurrency() ? 'selected':''}}>
                                {{$key}}
                            </option>
                        @endforeach

                    </select>
                </div>
            </div>
        </div><!-- End row -->
        <div class="row">
            <div class="col-md-12">
                <div id="social_footer">
                    <ul>
                        @foreach(\Settings::get('social_links', []) as $key => $link)
                            <li><a href="{{$link}}"><i class="icon-{{$key}}"></i></a></li>
                        @endforeach
                    </ul>
                    <p>{!! \Settings::get('footer_text') !!}</p>
                </div>
            </div>
        </div><!-- End row -->
    </div><!-- End container -->
</footer><!-- End footer -->

<div id="toTop"></div><!-- Back to top button -->

<!-- Search Menu -->
<div class="search-overlay-menu">
    <span class="search-overlay-close"><i class="icon_set_1_icon-77"></i></span>
    <form role="search" id="searchform" method="get" action="{{url('tours')}}">
        <input value="" name="term" type="search" placeholder="@lang('reservation-touring::labels.touring.search')"/>
        <button type="submit">
            <i class="icon_set_1_icon-78"></i>
        </button>
    </form>
</div><!-- End Search Menu -->

