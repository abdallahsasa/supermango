@extends('layouts.app')
@section('content')

    <section class="sb-menu-section sb-p-90-60">
        <div class="sb-bg-1">
            <div></div>
        </div>
        <div class="container">
            <!-- filter -->
            <div class="sb-filter mb-30">
                <a href="#." data-filter="*" class="sb-filter-link sb-active">All </a>
                @foreach($categories as $category)
                    <a href="#." data-filter=".{{str_replace(' ', '', $category->name)}}"
                       class="sb-filter-link">{{$category->name}}</a>
                @endforeach
            </div>
            <!-- filter end -->
            <div class="sb-masonry-grid">
                <div class="sb-grid-sizer"></div>
                @foreach($products as $product)
                    <div class="sb-grid-item sb-item-25 {{str_replace(' ', '', $product->category->name)}}">
                        <a data-fancybox="menu" data-no-swup href="{{$product->image_url}}"
                           class="sb-menu-item sb-mb-30">
                            <div class="sb-cover-frame">
                                <img src="{{$product->image_url}}" alt="{{$product->image_name}}">
                            </div>
                            <div class="sb-card-tp">
                                <h4 class="sb-card-title">{{$product->name}}</h4>
                                <div class="sb-price"> {{$product->prices[0]['price']}}
                                    <sub>{{$product->currency}}</sub></div>

                            </div>
                        </a>
                    </div>
                @endforeach
            </div>

        </div>
    </section>
    <!-- menu end -->
    <section class="sb-p-0-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="sb-promo-frame sb-mb-30">
                        <div class="sb-promo-content">
                            <div class="sb-text-frame">
                                <h3 class="sb-mb-10">Talabat</h3>
                                <h3 class="sb-mb-15">More And More Juices </h3>
                                <p class="sb-text sb-text-sm sb-mb-15">Delivers to You</p>
                                <!-- button -->
                                <a href="https://www.talabat.com/kuwait/more-and-more-juices" class="sb-btn sb-ppc"
                                   target="_blank">
                      <span class="sb-icon">
                        <img src="img/ui/icons/arrow.svg" alt="icon">
                      </span>
                                    <span>Order now</span>
                                </a>
                                <!-- button end -->
                            </div>
                            <div class="sb-image-frame">
                                <div class="sb-illustration-4">
                                    <img src="img/ui/talabat-logo.svg" alt="burger" class="sb-burger">
                                    <div class="sb-cirkle-1 talabat"></div>
                                    <div class="sb-cirkle-2 talabat"></div>
                                    <div class="sb-cirkle-3 talabat"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="sb-promo-frame sb-mb-30">
                        <div class="sb-promo-content">
                            <div class="sb-text-frame">
                                <h3 class="sb-mb-10">Deliveroo</h3>
                                <h3 class="sb-mb-15">More And More Juice </h3>
                                <p class="sb-text sb-text-sm sb-mb-15">Delivered to your door</p>
                                <!-- button -->
                                <a href="https://deliveroo.com.kw/en/brands/more-and-more-juice" class="sb-btn sb-ppc"
                                   target="_blank">
                      <span class="sb-icon">
                        <img src="img/ui/icons/arrow.svg" alt="icon">
                      </span>
                                    <span>Order now</span>
                                </a>
                                <!-- button end -->
                            </div>
                            <div class="sb-image-frame">
                                <div class="sb-illustration-4">
                                    <img src="img/ui/deliveroo-logo.svg" alt="burger" class="sb-burger">
                                    <div class="sb-cirkle-1 deliveroo"></div>
                                    <div class="sb-cirkle-2 deliveroo"></div>
                                    <div class="sb-cirkle-3 deliveroo"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
