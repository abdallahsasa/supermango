@extends('website.layouts.app')
@section('content')

    <!-- page title start -->
    <section class="page_title_area" data-background="{{asset('website/img/bg/page_title3.png')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page_title">
                        <h1 style="color: #ff8e28;">{{$product->name}}</h1>
                        <ul class="breadcrumb_nav ul_li">
                            <li ><a style="color: #ff8e28;" href="/">Home</a></li>
                            <li>{{$product->name}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb_icon_wrap" style="display: none">
            <div class="container">
                <div class="breadcrumb_icon">
                    <img src="{{asset('website/img/icon/bc_icon.png')}}" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- page title end -->

    <!-- shop details start -->
    <section class="shop_details pt-120 pb-90">
        <div class="container">
            <div class="product_top_wrap mb-60">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="product_wrap mb-30">
                            <div class="product_details_img ">
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel"
                                         aria-labelledby="home-tab">
                                        <div class="pl_thumb">
                                            <img src="{{$product->image_url}}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="details_content mb-30">
                            <h3 class="title">{{$product->name}}</h3>
                            <p>{!! $product->description !!}</p>
                            <h4 class="price"><strong>{{$product->regularprice()}} AED</strong></h4>
                            <div class="review_wrap ul_li">
                                <ul class="review ul_li">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                </ul>
                                <div class="text">
                                    <span>{{random_int(10,200)}} Review</span>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                    @foreach($product->prices as $price)
                                    <tr>
                                        <th>{{$price->size}}</th>
                                        <td class="product_weight">{{$price->price}} AED</td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>


                        </div>
                    </div>
                </div>
            </div>


            <div class="releted_product">
                <div class="sec_title sec_title-2">
                    <h2>Pair your favorite drink with the perfect accompaniments.</h2>
                </div>
                <div class="row justify-content-center">
                    @foreach($relatedProducts as $relatedProduct)
                    <div class="col-lg-4 col-md-6 col-sm-6 mb-30">
                        <div class="shop_single white_bg">
                            <div class="thumb text-center">
                                <a class="image" href="{{route('website.products.details',$relatedProduct->id)}}"><img src="{{$relatedProduct->image_url}}" alt=""></a>

                            </div>
                            <div class="content">
                                <div class="s_top ul_li">
                                    <span class="cat">{{$relatedProduct->category->name}}</span>
                                    <ul class="rating_star ul_li">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fal fa-star"></i></li>
                                        <li><i class="fal fa-star"></i></li>
                                    </ul>
                                </div>
                                <h3 class="title"><a href="{{route('website.products.details',$relatedProduct->id)}}">{{$relatedProduct->name}}</a></h3>
                                <div class="s_bottom ul_li">
                                    <span>Price</span>
                                    <span class="new">{{$relatedProduct->regularprice()}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- shop details end -->

@endsection
