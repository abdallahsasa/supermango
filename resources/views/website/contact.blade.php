@extends('website.layouts.app')

@section('content')


    <!-- page title start -->
    <section class="page_title_area" data-background="{{asset('website/img/bg/page_title3.png')}}"
             style="background-repeat: no-repeat;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="page_title">
                        <h1 style="color: #ff8e28;">Supermango Juices</h1>
                        <ul class="breadcrumb_nav ul_li">
                            <li  ><a style="color: #ff8e28;" href="/">Home</a></li>
                            <li>Contact Us</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>

    </section>
    <!-- page title end -->
    <!-- contact start -->
    <section class="copntact_area pt-120 pb-120">
        <div class="container">
            <div class="contact_wrap">
                <div class="row mb-10 justify-content-md-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="contact_info mb-40">
                            <div class="contact_icon">
                                <i class="fal fa-envelope-open-text"></i>
                            </div>
                            <div class="contact_text">
                                <h4>Email Address</h4>
                                <a href="mailto:info@supermango-kw.com"> <p> info@supermango-kw.com</p></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="contact_info mb-40">
                            <div class="contact_icon">
                                <i class="fal fa-phone"></i>
                            </div>
                            <div class="contact_text">
                                <h4>Phone Number</h4>
                                <a href="tel:+965 9090 1558"> <p> +965 9090 1558</p></a>


                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="contact_info mb-40">
                            <div class="contact_icon">
                                <i class="fal fa-map-marker-alt"></i>
                            </div>
                            <div class="contact_text">
                                <h4>Our Location</h4>
                                <p>Kwait - Jaber Al-Ahmed Co-op Society Block 6</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <form class="contact_form" method="POST" action="{{route('contact.store')}}">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" name="name" placeholder="Your Name" value="{{old('name')}}">
                                @if($errors->has('name'))
                                    <div class="alert alert-danger" role="alert">
                                        {{ $errors->first('name') }}
                                    </div>
                                @endif
                            </div>
                            <div class="col-lg-6">
                                <input type="email" name="email" placeholder="Mail Address" value="{{old('email')}}">
                                @if($errors->has('email'))
                                    <div class="alert alert-danger" role="alert">
                                        {{ $errors->first('email') }}
                                    </div>
                                @endif
                            </div>
                            <div class="col-12">
                                <input type="text" name="number" placeholder="Enter Your Phone">
                                @if($errors->has('number'))
                                    <div class="alert alert-danger" role="alert">
                                        {{ $errors->first('number') }}
                                    </div>
                                @endif
                            </div>
                            <div class="col-12">
                                <textarea name="message" id="message" cols="30" rows="10" placeholder="Your Massage :"> {{ old('message') }}</textarea>
                                @if($errors->has('message'))
                                    <div class="alert alert-danger" role="alert">
                                        {{ $errors->first('message') }}
                                    </div>
                                @endif
                            </div>
                            <div class="col-12">
                                <div class="contact_btn text-center">
                                    <a class="thm_btn thm_btn-black" href="#">Send Massage</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- contact end -->





@endsection
