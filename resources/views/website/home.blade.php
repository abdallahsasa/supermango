@extends('website.layouts.app')
@section('content')

<!-- slide-bar start -->
<aside class="slide-bar">
    <div class="close-mobile-menu">
        <a href="javascript:void(0);"><i class="fal fa-times"></i></a>
    </div>

    <!-- sidebar-info start -->
    <div class="cart_sidebar">
        <h2 class="heading_title text-uppercase">Cart Items - <span>4</span></h2>
        <div class="cart_items_list">
            <div class="cart_item">
                <div class="item_image">
                    <img src="{{asset('website/img/shop/cart/img_01.jpg')}}" alt="image_not_found">
                </div>
                <div class="item_content">
                    <h4 class="item_title">
                        Rorem ipsum dolor sit amet.
                    </h4>
                    <span class="item_price">$19.00</span>
                    <button type="button" class="remove_btn"><i class="fal fa-times"></i></button>
                </div>
            </div>
            <div class="cart_item">
                <div class="item_image">
                    <img src="{{asset('website/img/shop/cart/img_02.jpg')}}" alt="image_not_found">
                </div>
                <div class="item_content">
                    <h4 class="item_title">
                        Rorem ipsum dolor sit amet.
                    </h4>
                    <span class="item_price">$22.00</span>
                    <button type="button" class="remove_btn"><i class="fal fa-times"></i></button>
                </div>
            </div>
            <div class="cart_item">
                <div class="item_image">
                    <img src="{{asset('website/img/shop/cart/img_03.jpg')}}" alt="image_not_found">
                </div>
                <div class="item_content">
                    <h4 class="item_title">
                        Rorem ipsum dolor sit amet.
                    </h4>
                    <span class="item_price">$43.00</span>
                    <button type="button" class="remove_btn"><i class="fal fa-times"></i></button>
                </div>
            </div>
            <div class="cart_item">
                <div class="item_image">
                    <img src="{{asset('website/img/shop/cart/img_04.jpg')}}" alt="image_not_found">
                </div>
                <div class="item_content">
                    <h4 class="item_title">
                        Rorem ipsum dolor sit amet.
                    </h4>
                    <span class="item_price">$14.00</span>
                    <button type="button" class="remove_btn"><i class="fal fa-times"></i></button>
                </div>
            </div>
        </div>
        <div class="total_price text-uppercase">
            <span>Sub Total:</span>
            <span>$87.00</span>
        </div>
        <ul class="btns_group ul_li">
            <li><a href="cart.html" class="thm_btn text-uppercase">View Cart</a></li>
            <li><a href="checkout.html" class="thm_btn thm_btn-2 text-uppercase">Checkout</a></li>
        </ul>
    </div>
    <!-- sidebar-info end -->

    <!-- side-mobile-menu start -->
    <nav class="side-mobile-menu">
        <div class="header-mobile-search">
            <form role="search" method="get" action="#">
                <input type="text" placeholder="Search Keywords">
                <button type="submit"><i class="ti-search"></i></button>
            </form>
        </div>
        <ul id="mobile-menu-active">
            <li class="dropdown"><a href="index.html">Home</a>
                <ul class="sub-menu">
                    <li><a href="index.html">Home One</a></li>
                    <li><a href="index-2.html">Home Two</a></li>
                    <li><a href="index-3.html">Home Three</a></li>
                </ul>
            </li>
            <li><a href="about.html">About</a></li>
            <li class="dropdown">
                <a href="#">Pages</a>
                <ul class="sub-menu">
                    <li><a href="menu.html">Recipe Menu</a></li>
                    <li><a href="reservation.html">Reservation Form</a></li>
                    <li><a href="history.html">History</a></li>
                    <li><a href="team.html">Team</a></li>
                    <li><a href="faq.html">FAQ</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#">Shop</a>
                <ul class="sub-menu">
                    <li><a href="shop.html">Shop List</a></li>
                    <li><a href="shop-sidebar.html">Shop Sidebar</a></li>
                    <li><a href="shop-details.html">Shop Details</a></li>
                    <li><a href="cart.html">Shop Cart</a></li>
                    <li><a href="checkout.html">Shop Checkout</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#">Blog</a>
                <ul class="sub-menu">
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="blog-details.html">Blog Details</a></li>
                </ul>
            </li>
            <li><a href="contact.html">Contact</a></li>
        </ul>
    </nav>
    <!-- side-mobile-menu end -->
</aside>
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
                              <h4>  {{ $category->products[$randomIndex]->name }}</h4>
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
