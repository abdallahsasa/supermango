<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@extends('layouts.header')
<body class="antialiased">
<main class="">
    @yield('content')
</main>
</body>
@extends('layouts.footer')
</html>
