<header class="header_area header_1 transparent_header">
    <div id="sticky-header" class="header_wrap header_space">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-2 col-6">
                    <div class="logo">
                        <a href="/"><img width="45%" src="{{asset('website/img/Logo.png')}}" alt="logo"></a>
                    </div>
                </div>
                <div class="col-lg-6 col-4">
                    <div class="main_menu_wrap navbar navbar-expand-lg">
                        <nav class="main_menu collapse navbar-collapse">
                            <ul class="main_menu_list ul_li">

                                <li><a class="nav-link" href="{{route('website.home')}}">{{__('menu.home')}}</a> </li>
                                <li><a class="nav-link" href="{{route('website.products.index')}}">{{__('menu.menu')}}</a> </li>

                                <li>
                                    <a class="nav-link" href="{{route("website.contact")}}">{{__('menu.contact')}}</a>
                                </li>

                                <li class="dropdown" >
                                    <a class="nav-link">{{__('menu.language')}}</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('changeLang').'?lang=en' }}">{{__('menu.english')}}</a></li>
                                        <li><a href="{{ route('changeLang').'?lang=ar' }}">{{__('menu.arabic')}}</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-4 col-2">
                    <div class="main_menu_wrap navbar navbar-expand-lg">
                        <div class="header_right ul_li_right">
                            <div class="header_carts ul_li">
                                <div class="hamburger_menu">
                                    <a href="javascript:void(0);" class="">
                                        <div class="icon cart_btn d-none d-lg-block">
                                            <i class="fal fa-shopping-basket"></i>
                                            <small class="cart_counter">04</small>
                                        </div>
                                        <div class="icon bar d-lg-none">
                                            <span><i class="fal fa-bars"></i></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<aside class="slide-bar">
    <div class="close-mobile-menu">
        <a href="javascript:void(0);"><i class="fal fa-times"></i></a>
    </div>
    <!-- side-mobile-menu start -->
    <nav class="side-mobile-menu">
        <div class="header-mobile-search">
            <form role="search" method="get" action="#">
                <input type="text" placeholder="Search Keywords">
                <button type="submit"><i class="ti-search"></i></button>
            </form>
        </div>

            <ul id="mobile-menu-active">

                <li><a class="nav-link" href="{{route('website.home')}}">{{__('menu.home')}}</a> </li>
                <li><a class="nav-link" href="{{route('website.products.index')}}">{{__('menu.menu')}}</a> </li>

                <li>
                    <a class="nav-link" href="{{route("website.contact")}}">{{__('menu.contact')}}</a>
                </li>

                <li class="dropdown" >
                    <a class="nav-link">{{__('menu.language')}}</a>
                    <ul class="sub-menu">
                        <li><a href="{{ route('changeLang').'?lang=en' }}">{{__('menu.english')}}</a></li>
                        <li><a href="{{ route('changeLang').'?lang=ar' }}">{{__('menu.arabic')}}</a></li>
                    </ul>
                </li>
            </ul>
    </nav>
    <!-- side-mobile-menu end -->
</aside>
