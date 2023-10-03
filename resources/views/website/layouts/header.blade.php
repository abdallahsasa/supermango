<header class="header_area header_1 transparent_header">
    <div id="sticky-header" class="header_wrap header_space">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-2 col-6">
                    <div class="logo">
                        <a href="index.html"><img width="45%" src="{{asset('website/img/Logo.png')}}" alt="logo"></a>
                    </div>
                </div>
                <div class="col-lg-10 col-6">
                    <div class="main_menu_wrap navbar navbar-expand-lg">
                        <nav class="main_menu collapse navbar-collapse">
                            <ul class="main_menu_list ul_li">

                                <li><a class="nav-link" href="{{route('website.home')}}">Home</a> </li>
                                <li><a class="nav-link" href="{{route('website.products.index')}}">Menu</a> </li>

                                <li style="display:none;">
                                    <a class="nav-link" href="{{route("website.contact")}}">Contact</a>
                                </li>

                                <li class="dropdown" style="display:none;">
                                    <a class="nav-link">Languages</a>
                                    <ul class="sub-menu">
                                        <li><a href="#">English</a></li>
                                        <li><a href="#">Arabic</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
