<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta charset="utf-8" />
    <meta name="facebook-domain-verification" content="io9rpttns7ztrjz273fs9q4dwk1g4b" />
    <meta name="google-site-verification" content="3Fg8fQvJVpe_y5VW_SoU2h44JxrZYkAxj6Fqy8xZM7M" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>@yield('title')</title>
    <meta name="description" content="{{ config('app-meta.descraption') }}" />
    <meta name="keywords" content="{{ config('app-meta.key_words') }}" />
    <meta name="author" content="Hatf" />
    <meta name="robots" content="index, follow" />
    <link rel="icon" href="{{ asset('front/assets/imgs/favicon.svg') }}" type="image/svg+xml" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('front/assets/imgs/favicon.ico') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('front/assets/imgs/favicon.ico?v=2') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('web.layout.new_desighn_home.js_header')
    @include('web.layout.new_desighn_home.stylesheet')
    @yield('css')
    @yield('js_header')
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MLGTB4V8" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- start nav -->
    @include('web.layout.new_desighn_home.navbar_home')
    <!-- end nav -->


    @yield('content')


    <!-- start footer -->
    @include('web.layout.new_desighn_home.footer')
    <!-- end footer -->

    @include('web.layout.new_desighn_home.js_footer')

    @yield('js_footer')
</body>

</html>
