<!DOCTYPE html>
<html lang="{{ \Language::getCode() }}" dir="{{ \Language::getDirection() }}">
<head>
    {!! \SEO::generate() !!}
    <title>@yield('title') | {{ \Settings::get('site_name', 'Corals') }}</title>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicons -->
    <link href="{{ \Settings::get('site_favicon') }}" rel="icon">

    @include('partials.scripts.header')
</head>

<body class=" {{ \Language::isRTL() =='rtl' ?'rtl':''  }}">

@php \Actions::do_action('after_body_open') @endphp


@include('partials.header')

@yield('before_content')

@yield('content')


@yield('after_content')

@include('partials.footer')

@include('partials.scripts.footer')


@php \Actions::do_action('admin_footer_js') @endphp

</body>
</html>
