@extends('layouts.app')

@section('title', 'Layanan Make Up Profesional')

@section('content')

    <!--==============================
    Breadcumb
    ============================== -->
    <div class="breadcumb-wrapper " data-bg-src="{{asset('template/assets/img/breadcumb/breadcumb-bg-2.jpg')}}">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">About Us</h1>
                <div class="breadcumb-menu-wrap">
                    <ul class="breadcumb-menu">
                        <li><a href="index.html">Home</a></li>
                        <li>About Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!--==============================
    About Area
    ==============================-->
    <section class=" space-top space-extra-bottom">
        <div class="shape-mockup jump-img d-none d-xl-block" data-left="34%" data-bottom="1%"><img src="{{asset('template/assets/img/shape/leaf-1-6.png')}}" alt="shape"></div>
        <div class="container">
            <div class="row justify-content-between gx-0 ">
                <div class="col-md-10">
                    <span class="sec-subtitle">welcome</span>
                    <h2 class="h3 pe-xxl-5 me-xxl-5 mb-md-5 pb-xl-3">We think your skin should look and refshed matter Nourish your outer inner beauty with our essential oil infused beauty should products.</h2>
                </div>
                <div class="col-auto mb-5 mb-md-0">
                    <div class="pt-1 mt-2">
                        <div class="circle-btn style2">
                            <a href="service.html" class="btn-icon"><i class="far fa-arrow-right"></i></a>
                            <div class="btn-text">
                                <svg viewBox="0 0 150 150">
                                    <text>
                                        <textPath href="#textPath">to check our wellnez top rated services</textPath>
                                    </text>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vs-carousel mb-30 pb-1 wow fadeInUp" data-wow-delay="0.2s" data-fade="true">
                <div><img src="{{asset('template/assets/img/about/ab-4-1.jpg')}}" alt="about" class="w-100"></div>
                <div><img src="{{asset('template/assets/img/about/ab-4-2.jpg')}}" alt="about" class="w-100"></div>
                <div><img src="{{asset('template/assets/img/about/ab-4-3.jpg')}}" alt="about" class="w-100"></div>
            </div>
            <p class="fs-22 font-title text-title mb-4 mb-lg-5">We think your skin should look and refshed matter Nourish your outer inner beauty with our essential infused Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap intoun.</p>
            <div class="row justify-content-between">
                <div class="col-xl-4 mb-3 mb-xl-0">
                    <h3 class="text-uppercase font-body mt-n1">DISCOVER <span class="text-theme">Wellnez</span> Service</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto velit, porro doloremque cupiditate sint, quam provident fugit facilis soluta eos quos ab laborum.</p>
                </div>
                <div class="col-md-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="row gx-60">
                        <div class="col-auto">
                            <span class="about-number">01</span>
                        </div>
                        <div class="col">
                            <h4 class="fw-medium fs-26 font-body mt-n1 mb-lg-3 pb-lg-1">Beauty Should Products</h4>
                            <div class="list-style1">
                                <ul class="list-unstyled">
                                    <li>Feature Support</li>
                                    <li>Expeort Care</li>
                                    <li>Brand Product</li>
                                    <li>Quite Enviorment</li>
                                    <li>Outstanding Look</li>
                                    <li>Popular Service</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="row gx-60">
                        <div class="col-auto">
                            <span class="about-number">02</span>
                        </div>
                        <div class="col">
                            <h4 class="fw-medium fs-26 font-body mt-n1 mb-lg-3 pb-lg-1">Popular Skin Treatment</h4>
                            <div class="list-style1">
                                <ul class="list-unstyled">
                                    <li>Relax Mind</li>
                                    <li>Face Oil Massage</li>
                                    <li>Body Massage</li>
                                    <li>Black Massage</li>
                                    <li>Outstanding Support</li>
                                    <li>Happy Customers</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
