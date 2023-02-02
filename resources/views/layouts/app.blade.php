<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- color of address bar in mobile browser -->
    <meta name="theme-color" content="#F5C332">
    <!-- favicon  -->
    <link rel="shortcut icon" href="img/ui/logo.ico" type="image/x-icon">
    <!-- font awesome css -->
    <link rel="stylesheet" href="css/plugins/font-awesome.min.css">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/plugins/bootstrap.min.css">
    <!-- swiper css -->
    <link rel="stylesheet" href="css/plugins/swiper.min.css">
    <!-- datepicker css -->
    <link rel="stylesheet" href="css/plugins/datepicker.css">
    <!-- mapbox css -->
    <link href="css/plugins/mapbox-style.css" rel='stylesheet'>
    <!-- fancybox css -->
    <link rel="stylesheet" href="css/plugins/fancybox.min.css">
    <!-- starbelly css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- page title -->
    <title>More & More</title>
</head>

<body>

    @yield('content')

</body>
@extends('layouts.footer')
</html>
