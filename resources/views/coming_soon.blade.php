@extends('layouts.app')
@section('content')

    <!-- app wrapper -->
    <div class="sb-app">
        <!-- dynamic content -->
        <div id="sb-dynamic-content" class="sb-transition-fade">

            <!-- banner -->
            <section class="sb-banner">
                <div class="sb-bg-1">
                    <div></div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <!-- main title -->
                            <div class="sb-main-title-frame">
                                <div class="sb-main-title">
                                    <span class="sb-suptitle sb-mb-30">Hi, my friend!</span>
                                    <h1 class="sb-mb-30">Coming Soon</h1>
                                    <p class="sb-text sb-text-lg sb-mb-30">We will be in touch as soon as
                                        possible. <br>  <span>So,</span> get ready 😃</p>
                                    <!-- button -->
                                    <a href="menu-1.html" class="sb-btn">
                    <span class="sb-icon">
                      <img src="img/ui/icons/menu.svg" alt="icon">
                    </span>
                                        <span>Our menu</span>
                                    </a>
                                    <!-- button end -->
                                    <!-- button -->
                                    <a href="about-1.html" class="sb-btn sb-btn-2 sb-btn-gray">
                    <span class="sb-icon">
                      <img src="img/ui/icons/arrow.svg" alt="icon">
                    </span>
                                        <span>About us</span>
                                    </a>
                                    <!-- button end -->
                                </div>
                            </div>
                            <!-- main title end -->
                        </div>
                        <div class="col-lg-6">
                            <div class="sb-illustration-1">
{{--                                <img src="img/illustrations/girl.png" alt="girl" class="sb-girl">--}}
                                <img src="{{asset('img/cup.png')}}"alt="girl" class="sb-girl">
                                <div class="sb-cirkle-1"></div>
                                <div class="sb-cirkle-2"></div>
                                <div class="sb-cirkle-3"></div>
                                <div class="sb-cirkle-4"></div>
                                <div class="sb-cirkle-5"></div>
                                <img src="img/illustrations/3.svg" alt="phones" class="sb-pik-1">
                                <img src="img/illustrations/1.svg" alt="phones" class="sb-pik-2">
                                <img src="img/illustrations/2.svg" alt="phones" class="sb-pik-3">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- banner end -->


        </div>
        <!-- app wrapper end -->

@endsection
