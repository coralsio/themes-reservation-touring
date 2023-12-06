@if(\Language::isRTL())
    {!! Theme::css('css/bootstrap-rtl.min.css') !!}
    {!! Theme::css('css/style.css') !!}

    {!! Theme::css('css/style-rtl.css') !!}

@else
    {!! Theme::css('css/bootstrap.min.css') !!}
    {!! Theme::css('css/style.css') !!}


@endif
{!! Theme::css('css/vendors.css') !!}
{!! Theme::css('css/custom.css') !!}


<link href="https://fonts.googleapis.com/css2?family=Gochi+Hand&family=Montserrat:wght@300;400;500;600;700&display=swap"
      rel="stylesheet">

{!! Theme::css('plugins/select2/dist/css/select2.min.css') !!}
{!! Theme::css('plugins/Ladda/ladda-themeless.min.css') !!}
{!! Theme::css('plugins/sweetalert2/dist/sweetalert2.css') !!}
{!! Theme::css('plugins/toastr/toastr.min.css') !!}
{!! Theme::css('font-awesome-4.7.0/css/font-awesome.min.css') !!}


@stack('partial_css')

<style>
    header #logo_home h1 a {
        background-image: url({{\Corals\Settings\Facades\Settings::get('site_logo_white')}});
    }

    header.sticky #logo_home h1 a {
        background-image: url({{\Corals\Settings\Facades\Settings::get('site_logo')}});
    }
</style>


<script type="text/javascript">
    window.base_url = '{!! url('/') !!}';
    window.rtl = {{ \Language::isRTL() ? "true":"false" }};

</script>
@yield('css')
@stack('partial_css')

