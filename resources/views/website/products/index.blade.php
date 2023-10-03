@extends('website.layouts.app')

@section('content')
    <!-- page title start -->
    <section class="page_title_area" data-background="{{asset('website/img/bg/page_title3.png')}}" style="background-repeat: no-repeat;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="page_title">
                        <h1 style="color: #ff8e28;">Romana Juices</h1>
                        <ul class="breadcrumb_nav ul_li">
                            <li><a href="/">Home</a></li>
                            <li>Online Menu</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>

    </section>
    <!-- page title end -->

    <!-- shop start -->
    <section class="shop_area pt-40 pb-40">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="masonry_active mb-40">
                        <button class="active" data-filter="*">all categories</button>
                        @foreach($categories as $category)
                        <button data-filter=".{{$category->id}}">{{$category->name}}</button>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="row grid">
                @foreach($products as $product)
                <div class="col-lg-4 col-md-6 col-sm-6 grid-item mb-30 {{$product->category->id}}">
                    <div class="shop_single white_bg">
                        <div class="thumb text-center">
                            <a class="image" href=""><img src="{{$product->image_url}}" alt=""></a>
                        </div>
                        <div class="content">
                            <div class="s_top ul_li">
                                <span class="cat">{{$product->category->name}}</span>
                                <ul class="rating_star ul_li">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fal fa-star"></i></li>
                                    <li><i class="fal fa-star"></i></li>
                                </ul>
                            </div>
                            <h3 class="title"><a href="shop-details.html">{{$product->name}}</a></h3>
                            <div class="s_bottom ul_li">
                                <span class="price">Price -</span>
                                <span>$53.00</span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </section>
    <!-- shop end -->


@endsection
