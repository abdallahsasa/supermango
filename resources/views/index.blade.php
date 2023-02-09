@extends('layouts.app')
@section('content')
    <!-- app wrapper -->
    <div class="sb-app">
        <!-- dynamic content -->
        <div id="sb-dynamic-content" class="sb-transition-fade">

            <section class="sb-menu-section sb-p-90-60">
                <div class="sb-bg-1">
                    <div></div>
                </div>
                <div class="container">
                    <!-- filter -->
                    <div class="sb-filter mb-30">
                        <a href="#." data-filter="*" class="sb-filter-link sb-active">All dishes</a>
                        <a href="#." data-filter=".starters" class="sb-filter-link">Starters</a>
                        <a href="#." data-filter=".main-dishes" class="sb-filter-link">Main dishes</a>
                        <a href="#." data-filter=".drinks" class="sb-filter-link">Drinks</a>
                        <a href="#." data-filter=".desserts" class="sb-filter-link">Dessert</a>
                    </div>
                    <!-- filter end -->
                    <div class="sb-masonry-grid">
                        <div class="sb-grid-sizer"></div>
                        @foreach($products as $product)
                        <div class="sb-grid-item sb-item-25 main-dishes">
                            <a data-fancybox="menu" data-no-swup href="{{$product->image_url}}" class="sb-menu-item sb-mb-30">
                                <div class="sb-cover-frame">
                                    <img src="{{$product->image_url}}" alt="product">
                                </div>
                                <div class="sb-card-tp">
                                    <h4 class="sb-card-title">{{$product->name}}</h4>
                                    <div class="sb-price"><sub>{{$product->currency}}</sub> {{$product->price}}</div>
                                </div>
                                <div class="sb-description">
                                    <p class="sb-text sb-mb-15">{{$product->descrption}}</p>
                                    <ul class="sb-stars" style="display: none;">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><span>(4 ratings)</span></li>
                                    </ul>
                                </div>
                            </a>
                        </div>
                    </div>
                    @endforeach
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
                                        <h3 class="sb-mb-10"><sup>-</sup> <b class="sb-h2">50</b> <sup>%</sup></h3>
                                        <h3 class="sb-mb-15">Discount for all* burgers!</h3>
                                        <p class="sb-text sb-text-sm sb-mb-15">*Et modi itaque praesentium.</p>
                                        <!-- button -->
                                        <a href="product.html" class="sb-btn sb-ppc">
                      <span class="sb-icon">
                        <img src="img/ui/icons/arrow.svg" alt="icon">
                      </span>
                                            <span>Get it now</span>
                                        </a>
                                        <!-- button end -->
                                    </div>
                                    <div class="sb-image-frame">
                                        <div class="sb-illustration-4">
                                            <img src="img/illustrations/burger.png" alt="burger" class="sb-burger">
                                            <div class="sb-cirkle-1"></div>
                                            <div class="sb-cirkle-2"></div>
                                            <div class="sb-cirkle-3"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="sb-promo-frame sb-mb-30">
                                <div class="sb-promo-content">
                                    <div class="sb-text-frame">
                                        <h3 class="sb-mb-15">Visit Starbelly and get your coffee*</h3>
                                        <h3 class="sb-mb-10"><b class="sb-h2">For free!</b></h3>
                                        <p class="sb-text sb-text-sm sb-mb-15">*Et modi itaque praesentium.</p>
                                        <!-- button -->
                                        <a href="product.html" class="sb-btn sb-ppc">
                      <span class="sb-icon">
                        <img src="img/ui/icons/arrow.svg" alt="icon">
                      </span>
                                            <span>Get it now</span>
                                        </a>
                                        <!-- button end -->
                                    </div>
                                    <div class="sb-image-frame">
                                        <div class="sb-illustration-5">
                                            <img src="img/illustrations/cup.png" alt="cup" class="sb-cup">
                                            <div class="sb-cirkle-1"></div>
                                            <div class="sb-cirkle-2"></div>
                                            <div class="sb-cirkle-3"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- dynamic content end -->

    </div>
    <!-- app wrapper end -->








@endsection
