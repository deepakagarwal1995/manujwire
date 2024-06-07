<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Barbed Wire | Galvanized Wire Manufacturers in Uttar Pradesh Manuj Wire</title>
    <meta name="description" content="{{ config('app.name') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="shortcut icon" type="image/x-icon" href="{{ config('app.url') }}/img/books&beyond logo.png" />


    <meta name="theme-color" content="#a7baff">
    <!--plugin-css-->

    <meta property="og:site_name" content="Best Digital Marketing Company in India | SVT India">

    <meta property="og:type" content="website">
    <meta property="og:image" content="{{ config('app.url') }}/img/books&beyond logo.png">

    <link rel="canonical" href="{{ config('app.url') }}">


    <meta name="description" content="">
    <meta property="og:title" content="Barbed Wire | Galvanized Wire Manufacturers in Uttar Pradesh Manuj Wire">
    <meta property="og:description" content="">



    <meta name="theme-color" content="#a7baff">
    <meta name="msapplication-TileColor" content="#a7baff">
    <meta name="msapplication-navbutton-color" content="#a7baff">
    <meta name="apple-mobile-web-app-status-bar-style" content="#a7baff">



    @include('visitors.inc.headerlinks')
    @yield('head')
</head>

<body>
    <!-- START PRELOADER -->

    <!-- END PRELOADER -->
    <!-- START HEADER SECTION -->
    @include('visitors.inc.header')
    <!-- END HEADER SECTION -->
    <!-- START SLIDER SECTION -->
    @yield('content')
    <!-- END CLIENT SECTION -->
    <!-- START FOOTER -->

    @include('visitors.inc.footer')
    @include('visitors.inc.footerlinks')
    @yield('scripts')
    <!-- Latest jQuery -->

</body>

</html>
