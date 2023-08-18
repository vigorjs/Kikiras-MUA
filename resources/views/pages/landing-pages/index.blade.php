@extends('layouts.app')

@section('title', 'Layanan Make Up Profesional')

@section('content')
    <!--==============================
    Hero Area
    ==============================-->
    <section class="hero-layout1  ">
        <div class="hero-shape-1 jump-reverse" data-top="14%" data-right="42%"><img src="{{asset('template/assets/img/hero/hero-leaf-1.png')}}" alt="hero"></div>
        <div class="hero-shape-2 rotate-img" data-top="13%" data-right="10%"><img src="{{asset('template/assets/img/hero/hero-flower-small.png')}}" alt="hero"></div>
        <div class="hero-shape-3 jump-img" data-bottom="29%" data-right="0%"><img src="{{asset('template/assets/img/hero/hero-leaf-2.png')}}" alt="hero"></div>
        <div class="hero-mask" data-mask-src="{{asset('template/assets/img/hero/hero-mask-bg-1.png')}}">
            <div class="vs-carousel" data-slide-show="1" data-fade="true">
                <div>
                    <div class="hero-inner">
                        <div class="hero-img">
                            <img src="{{asset('template/assets/img/hero/hero-1-1.png')}}" alt="hero">
                            <div class="hero-ripple"><i class="ripple"></i><i class="ripple"></i></div>
                        </div>
                        <div class="hero-content">
                            <div class="hero-flower"><img src="{{asset('template/assets/img/hero/hero-flower.png')}}" alt="hero" class="jump"></div>
                            <span class="hero-subtitle">skincare inspires</span>
                            <h1 class="hero-title">Spa Specialty</h1>
                            <a href="appointment.html" class="vs-btn style3">Appointment</a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="hero-inner">
                        <div class="hero-img">
                            <img src="{{asset('template/assets/img/hero/hero-1-2.png')}}" alt="hero">
                            <div class="hero-ripple"><i class="ripple"></i><i class="ripple"></i></div>
                        </div>
                        <div class="hero-content">
                            <div class="hero-flower"><img src="{{asset('template/assets/img/hero/hero-flower.png')}}" alt="hero" class="jump"></div>
                            <span class="hero-subtitle">skincare inspires</span>
                            <h1 class="hero-title">Skin Refresh</h1>
                            <a href="appointment.html" class="vs-btn style3">Appointment</a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="hero-inner">
                        <div class="hero-img">
                            <img src="{{asset('template/assets/img/hero/hero-1-3.png')}}" alt="hero">
                            <div class="hero-ripple"><i class="ripple"></i><i class="ripple"></i></div>
                        </div>
                        <div class="hero-content">
                            <div class="hero-flower"><img src="{{asset('template/assets/img/hero/hero-flower.png')}}" alt="hero" class="jump"></div>
                            <span class="hero-subtitle">skincare inspires</span>
                            <h1 class="hero-title">Body Relax</h1>
                            <a href="appointment.html" class="vs-btn style3">Appointment</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="body-gradient-1"></div>
    <div class="position-relative">

        <!--==============================
        Category Area
        ==============================-->
        <section class="space-top">
            <div class="shape-mockup jump d-none d-lg-block" data-top="-3%" data-right="4%"><img src="{{asset('template/assets/img/hero/hero-leaf-3.png')}}" alt="leaf"></div>
            <div class="container">
                <div class="title-area text-center">
                    <span class="sec-subtitle">skincare by andfaison</span>
                    <h2 class="sec-title">Facials & Body Treatments</h2>
                    <div class="sec-shape"><img src="{{asset('template/assets/img/shape/sec-shape-1.png')}}" alt="shape"></div>
                </div>
                <div class="row vs-carousel has-slide-shadow" data-slide-show="5" data-ml-slide-show="4" data-lg-slide-show="3" data-md-slide-show="2">
                    <div class="col-xl-3">
                        <div class="category-style1">
                            <div class="category-icon"><img src="{{asset('template/assets/img/icon/cat-1-1.png')}}" alt="categoryicon"></div>
                            <h3 class="category-name"><a href="service-details.html" class="text-inherit">clean ingredient</a></h3>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="category-style1">
                            <div class="category-icon"><img src="{{asset('template/assets/img/icon/cat-1-2.png')}}" alt="categoryicon"></div>
                            <h3 class="category-name"><a href="service-details.html" class="text-inherit">ANCIENT FORMULAS</a></h3>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="category-style1">
                            <div class="category-icon"><img src="{{asset('template/assets/img/icon/cat-1-3.png')}}" alt="categoryicon"></div>
                            <h3 class="category-name"><a href="service-details.html" class="text-inherit">MADE SUSTAINABLY</a></h3>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="category-style1">
                            <div class="category-icon"><img src="{{asset('template/assets/img/icon/cat-1-4.png')}}" alt="categoryicon"></div>
                            <h3 class="category-name"><a href="service-details.html" class="text-inherit">PARABEN FREE</a></h3>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="category-style1">
                            <div class="category-icon"><img src="{{asset('template/assets/img/icon/cat-1-5.png')}}" alt="categoryicon"></div>
                            <h3 class="category-name"><a href="service-details.html" class="text-inherit">PARABEN FREE</a></h3>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="category-style1">
                            <div class="category-icon"><img src="{{asset('template/assets/img/icon/cat-1-6.png')}}" alt="categoryicon"></div>
                            <h3 class="category-name"><a href="service-details.html" class="text-inherit">hair Towel</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--==============================
        About Area
        ==============================-->
        <section class=" space-extra-top space-bottom">
            <div class="shape-mockup jump-reverse-img d-none d-xxl-block d-hd-none" data-top="4%" data-left="-3%">
                <div class="curb-shape1"></div>
            </div>
            <div class="shape-mockup jump-img d-none d-lg-block" data-top="6%" data-right="39.2%"><span class="big-letter">A</span></div>
            <div class="container">
                <div class="row gx-xl-0">
                    <div class="col-lg-6 col-xl-7 mb-40 mb-lg-0 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="img-box1">
                            <img src="{{asset('template/assets/img/about/about-1-1.png')}}" alt="about">
                            <div class="img-1 jump-reverse"><img src="{{asset('template/assets/img/shape/leaf-1-5.png')}}" alt=""></div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-5 align-self-center wow fadeInUp" data-wow-delay="0.3s">
                        <span class="sec-subtitle">Experience Wellnez <span class="sec-subtext">25 Years</span></span>
                        <h2 class="sec-title">Body Treatments</h2>
                        <div class="media-style1">
                            <div class="circle-btn style3">
                                <a href="about.html" class="btn-icon"><i class="far fa-arrow-right"></i></a>
                                <div class="btn-text">
                                    <svg viewBox="0 0 150 150">
                                        <text>
                                            <textPath href="#textPath">how to make your makeup last all day</textPath>
                                        </text>
                                    </svg>
                                </div>
                            </div>
                            <div class="media-body">
                                <p class="media-text">We think your skin should look and refshed matter your lifestyle Wellnez.</p>
                            </div>
                        </div>
                        <p class="about-text">There are many variations of passages of Lofrem the Ipsum availaasble, but the majority have suffered alteration in some form injected.</p>
                        <a href="about.html" class="vs-btn style3">View More</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
