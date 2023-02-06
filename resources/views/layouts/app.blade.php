<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- color of address bar in mobile browser -->
    <meta name="theme-color" content="#F5C332">
    <!-- favicon  -->
    <link rel="shortcut icon" href="{{asset('img/ui/logo.png')}}" type="image/x-icon">
    <!-- font awesome css -->
    <link rel="stylesheet" href="{{asset('css/plugins/font-awesome.min.css')}}">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{asset('css/plugins/bootstrap.min.css')}}">
    <!-- swiper css -->
    <link rel="stylesheet" href="{{asset('css/plugins/swiper.min.css')}}">
    <!-- datepicker css -->
    <link rel="stylesheet" href="{{asset('css/plugins/datepicker.css')}}">
    <!-- mapbox css -->
    <link href="{{asset('css/plugins/mapbox-style.css')}}" rel='stylesheet'>
    <!-- fancybox css -->
    <link rel="stylesheet" href="{{asset('css/plugins/fancybox.min.css')}}">
    <!-- starbelly css -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- page title -->
    <title>More & More</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    @vite([ 'resources/js/app.js'])
</head>

<body>
<!-- preloader -->
<div class="sb-preloader">
    <div class="sb-preloader-bg"></div>
    <div class="sb-preloader-body">
        <div class="sb-loading">
            <div class="sb-percent"><span class="sb-preloader-number" data-count="101">00</span><span>%</span></div>
        </div>
        <div class="sb-loading-bar">
            <div class="sb-bar"></div>
        </div>
    </div>
</div>
<!-- preloader end -->

<!-- click effect -->
<div class="sb-click-effect"></div>
<!-- loader -->
<div class="sb-load"></div>


@extends('layouts.header')
@yield('content')
</body>
@extends('layouts.footer')
</html>





