<div id="preloader">
    <div class="sk-spinner sk-spinner-wave">
        <div class="sk-rect1"></div>
        <div class="sk-rect2"></div>
        <div class="sk-rect3"></div>
        <div class="sk-rect4"></div>
        <div class="sk-rect5"></div>
    </div>
</div>

<div class="layer"></div>

<!-- Header================================================== -->
<header>
    <div id="top_line">
        <div class="container">
            <div class="row">
                <div class="col-6"><i
                            class="icon-phone"></i><strong>{{ \Settings::get('contact_mobile','+970599593301') }}</strong>
                </div>
                <div class="col-6">
                    <ul id="top_links">
                        @auth
                            <li>
                                <a href="{{ user()->getDashboardUrl() }}">
                                    <i class="fa fa-dashboard"></i> @lang('reservation-touring::labels.partial.dashboard')
                                </a>
                            </li>


                            <li>
                                <a href="{{ route('profile') }}">
                                    <i class="fa fa-user-o"></i> @lang('reservation-touring::labels.partial.profile')
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('logout') }}" data-action="logout">
                                    <i class="fa fa-sign-out"></i> @lang('reservation-touring::labels.partial.logout')
                                </a>
                            </li>
                        @else
                            <li><a href="{{url('login')}}">@lang('reservation-touring::labels.touring.sign_in')</a></li>
                        @endauth
                        <li><a href="{{url('my-dashboard#wishlists')}}"
                               id="wishlist_link">@lang('reservation-touring::labels.partial.wishlist')</a></li>
                    </ul>
                </div>
            </div><!-- End row -->
        </div><!-- End container-->
    </div><!-- End top line-->

    <div class="container">
        <div class="row">
            <div class="col-3">
                <div id="logo_home">
                    <h1><a href="{{url('/')}}"
                           title="{{ \Settings::get('site_name', 'Corals') }}">{{ \Settings::get('site_name', 'Corals') }}
                            e</a></h1>
                </div>
            </div>
            <nav class="col-9">
                <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span></span></a>
                <div class="main-menu">
                    <div id="header_menu">
                        <img src="{{ \Settings::get('site_logo') }}" width="160" height="34"
                             alt="{{ \Settings::get('site_name', 'Corals') }}">
                    </div>
                    <a href="#" class="open_close" id="close_in"><i class="icon_set_1_icon-77"></i></a>
                    <ul>
                        @include('partials.menu.menu_item', ['menus' => Menus::getMenu('frontend_top','active')])

                    </ul>
                </div><!-- End main-menu -->
                <ul id="top_tools">
                    <li>
                        <a href="javascript:void(0);" class="search-overlay-menu-btn"><i class="icon_search"></i></a>
                    </li>

                </ul>
            </nav>
        </div>
    </div><!-- container -->
</header><!-- End Header -->
