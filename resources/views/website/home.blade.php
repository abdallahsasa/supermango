@extends('website.layouts.app')
@section('content')

<!-- slide-bar start -->

<div class="body-overlay"></div>
<!-- slide-bar end -->


    <!-- hero start -->
    <section class="hero_area hero_1 rtl">
        <div class="hero_wrap hero_height hero_bg">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-lg-between" @if(app()->getLocale() === 'ar') style="flex-direction: row-reverse;@endif">
                    <div class="col-lg-5">
                        <div class="hero_img">
{{--                            <img src="{{asset('website/img/hero/img_01.png')}}" alt="">--}}
                            <img src="{{asset('website/img/Logo.png')}}" alt="">
                            <div class="d_img">
                                <img src="{{asset('website/img/icon/d_img.png')}}" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 order-first">
                        <div class="hero_text">
                            <h5>{{__('home.heading1')}}</h5>
                            <h2>{{__('home.heading2')}}</h2>
                            <p>{{__('home.subhead')}}</p>
                            <div class="hero_btn ul_li">
                                <a class="thm_btn" >{{__('home.contact')}}</a>
                                <a class="thm_btn thm_btn-2" href="{{route('website.products.index')}}">{{__('home.cta')}}</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6" >
                        <ul class="info_list ul_li_block">
                            <li>
                                <h4>{{__('home.left1')}}</h4>
                                <div class="count">
                                    <span>01</span>
                                </div>
                            </li>
                            <li>
                                <h4>{{__('home.left2')}}</h4>
                                <div class="count">
                                    <span>02</span>
                                </div>
                            </li>
                            <li>
                                <h4>{{__('home.left3')}}</h4>
                                <div class="count">
                                    <span>03</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- hero end -->

    <!-- category start -->
    <section class="category_area pt-120 pb-120">
        <div class="container">
            <div class="sec_title sec_title-2">
                <span>{{__('home.menu-headline')}}</span>
                <h2>{{__('home.menu-subhead')}}</h2>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="category_active owl-carousel">
                        @foreach($categories as $category)
                            @if($category->products->count() > 0)
                        <div class="cat_single">
                            <div class="cat_icon">
                                <img src="{{asset($category->image_url)}}" alt="">
                            </div>
                            <h3><a href="{{route('website.products.filtermenu',$category->id)}}">{{$category->name}}</a></h3>

                            <div class="cat_shape">
                                <img src="{{asset('website/img/icon/cat_shape.png')}}" alt="">
                            </div>
                            @if($category->products->count() > 0)
                                    <?php $randomIndex = rand(0, $category->products->count() - 1); ?>
                              <h4> <a href="{{route('website.products.details',$category->products[$randomIndex]->id)}}"> {{ $category->products[$randomIndex]->name }}</a></h4>
                                <div class="cat_img">
                                    <img src="{{$category->products[$randomIndex]->image_url}}" alt="">
                                </div>
                            @endif

                        </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- category end -->



@endsection
