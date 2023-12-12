@extends('layouts.app')

@section('title', 'Layanan Make Up Profesional')

@section('content')
    <!--==============================
    Hero Area
    ==============================-->
    <section class="hero-layout1  ">
        <div class="hero-shape-1 jump-reverse" data-top="14%" data-right="42%"><img loading="lazy" src="{{asset('template/assets/img/hero/hero-leaf-1.png')}}" alt="hero"></div>
        <div class="hero-shape-2 rotate-img" data-top="13%" data-right="10%"><img loading="lazy" src="{{asset('template/assets/img/hero/hero-flower-small.png')}}" alt="hero"></div>
        <div class="hero-shape-3 jump-img" data-bottom="29%" data-right="0%"><img loading="lazy" src="{{asset('template/assets/img/hero/hero-leaf-2.png')}}" alt="hero"></div>
        <div class="hero-mask" data-mask-src="{{asset('template/assets/img/hero/hero-mask-bg-1.png')}}">
            <div class="vs-carousel" data-slide-show="1" data-fade="true">
                <div>
                    <div class="hero-inner">
                        <div class="hero-img">
                            <img loading="lazy" src="{{asset('template/assets/img/beauty/beauty1.png')}}" alt="hero">
                            <div class="hero-ripple"><i class="ripple"></i><i class="ripple"></i></div>
                        </div>
                        <div class="hero-content">
                            <div class="hero-flower"><img loading="lazy" src="{{asset('template/assets/img/hero/hero-flower.png')}}" alt="hero" class="jump"></div>
                            <span class="hero-subtitle">beauty inspires</span>
                            <h1 class="hero-title">Flawless MUA</h1>
                            <a href="appointment.html" class="vs-btn style3">Appointment</a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="hero-inner">
                        <div class="hero-img">
                            <img loading="lazy" src="{{asset('template/assets/img/beauty/beauty2.png')}}" alt="hero">
                            <div class="hero-ripple"><i class="ripple"></i><i class="ripple"></i></div>
                        </div>
                        <div class="hero-content">
                            <div class="hero-flower"><img loading="lazy" src="{{asset('template/assets/img/hero/hero-flower.png')}}" alt="hero" class="jump"></div>
                            <span class="hero-subtitle">beauty inspires</span>
                            <h2 class="hero-title">Skin Refresh</h2>
                            <a href="appointment.html" class="vs-btn style3">Appointment</a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="hero-inner">
                        <div class="hero-img">
                            <img loading="lazy" src="{{asset('template/assets/img/beauty/beauty5.png')}}" alt="hero">
                            <div class="hero-ripple"><i class="ripple"></i><i class="ripple"></i></div>
                        </div>
                        <div class="hero-content">
                            <div class="hero-flower"><img loading="lazy" src="{{asset('template/assets/img/hero/hero-flower.png')}}" alt="hero" class="jump"></div>
                            <span class="hero-subtitle">beauty inspires</span>
                            <h2 class="hero-title">Weedings</h2>
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
            <div class="shape-mockup jump d-none d-lg-block" data-top="-3%" data-right="4%"><img loading="lazy" src="{{asset('template/assets/img/hero/hero-leaf-3.png')}}" alt="leaf"></div>
            <div class="container">
                <div class="title-area text-center">
                    <span class="sec-subtitle">make up by kikiraa</span>
                    <h2 class="sec-title">Flawless & Fresh Makeups</h2>
                    <div class="sec-shape"><img loading="lazy" src="{{asset('template/assets/img/shape/sec-shape-1.png')}}" alt="shape"></div>
                </div>
                <div class="row vs-carousel has-slide-shadow" data-slide-show="5" data-ml-slide-show="4" data-lg-slide-show="3" data-md-slide-show="2">
                    <div class="col-xl-3">
                        <div class="category-style1">
                            <div class="category-icon"><img loading="lazy" src="{{asset('template/assets/img/icon/cat-1-1.png')}}" alt="categoryicon"></div>
                            <h3 class="category-name"><a href="service-details.html" class="text-inherit">clean ingredient</a></h3>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="category-style1">
                            <div class="category-icon"><img loading="lazy" src="{{asset('template/assets/img/icon/cat-1-2.png')}}" alt="categoryicon"></div>
                            <h3 class="category-name"><a href="service-details.html" class="text-inherit">ANCIENT FORMULAS</a></h3>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="category-style1">
                            <div class="category-icon"><img loading="lazy" src="{{asset('template/assets/img/icon/cat-1-3.png')}}" alt="categoryicon"></div>
                            <h3 class="category-name"><a href="service-details.html" class="text-inherit">Long Lasting</a></h3>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="category-style1">
                            <div class="category-icon"><img loading="lazy" src="{{asset('template/assets/img/icon/cat-1-4.png')}}" alt="categoryicon"></div>
                            <h3 class="category-name"><a href="service-details.html" class="text-inherit">Quality Equipment</a></h3>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="category-style1">
                            <div class="category-icon"><img loading="lazy" src="{{asset('template/assets/img/icon/cat-1-6.png')}}" alt="categoryicon"></div>
                            <h3 class="category-name"><a href="service-details.html" class="text-inherit">Skincares</a></h3>
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
                            <img loading="lazy" src="{{asset('template/assets/img/beauty/about1.jpg')}}" alt="about">
                            <div class="img-1 jump-reverse"><img loading="lazy" src="{{asset('template/assets/img/shape/leaf-1-5.png')}}" alt=""></div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-5 align-self-center wow fadeInUp" data-wow-delay="0.3s">
                        <span class="sec-subtitle">Experience Wellness <span class="sec-subtext">+5 Years</span></span>
                        <h2 class="sec-title">Make up Treatments - Kikiraa</h2>
                        <div class="media-style1">
                            <div class="circle-btn style3">
                                <a href="about.html" class="btn-icon"><i class="far fa-arrow-right"></i></a>
                                <div class="btn-text">
                                    <svg viewBox="0 0 150 150">
                                        <text>
                                            <textPath href="#textPath">Temukan Lebih Banyak</textPath>
                                        </text>
                                    </svg>
                                </div>
                            </div>
                            <div class="media-body">
                                <p class="media-text">Kami berkomitmen untuk membuat Anda tampil memukau dalam setiap kesempatan.</p>
                            </div>
                        </div>
                        <p class="about-text">Kami menawarkan beragam pilihan make up untuk acara spesial Anda. Dengan pengalaman kami yang luas, kami dapat membuat tampilan yang sesuai dengan kepribadian dan keinginan Anda.</p>
                        <a href="about.html" class="vs-btn style3">Our Service</a>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!--==============================
    Gallery Area
    ==============================-->
    <section class="outer-wrap2 space-extra-bottom mb-10">
        <div class="container-lg">
            <div class="row gy-3 mb-5 align-items-end">
                <div class="col-sm-auto">
                    <h2 class="sec-title mb-n2">#instagram</h2>
                </div>
                <div class="col-sm">
                    <div class="sec-line pb-1"></div>
                </div>
                <div class="col-sm-auto d-none d-lg-block">
                    <a href="https://www.instagram.com/makeupbykikiraa/" target="_blank" class="user-id-link">@makeupbykikiraa</a>
                </div>
            </div>
        </div>
        <div class="container-fluid px-0 wow fadeInUp" data-wow-delay="0.2s">
            <div class="row gx-60 gy-gx justify-content-between">
                @foreach ($profile as $profile)
                    <?php
                        $media_url = $profile->url;
                        $caption = $profile->caption;
                        $image_info = @getimagesize($media_url); // Suppress error if URL is not an image
                        $width = $image_info[0] ?? 0; // Get image width
                        $height = $image_info[1] ?? 0; // Get image height
                        if ($height === 0) {
                            continue; // Skip images with zero height
                        }
                        $aspect_ratio = $width / $height;
                    ?>
                    @if ($loop->index < 5)
                        <div class="{{ ($aspect_ratio <= 1.1 && $aspect_ratio >= 0.9) ? 'col-6 col-md-4 col-lg' : 'col-md-4 col-lg' }}">
                            <div class="gallery-style1 mega-hover ">
                                <div class="{{ ($aspect_ratio <= 1.1 && $aspect_ratio >= 0.9) ? 'gallery-img' : 'gallery-img img-rounded' }}"><a href="gallery-details.html"><img loading="lazy" loading="lazy" src="{{url($media_url)}}" alt="{{$caption}}"></a></div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>

    <!--==============================
    Brand Partners
    ==============================-->
        <div class="bg-light-2 space-extra shape-mockup-wrap">
            <div class="shape-mockup jump-reverse-img d-none d-xl-block" data-left="2%" data-top="10%"><img loading="lazy" src="{{asset('template/assets/img/shape/b-s-1-3.png')}}" alt="shape"></div>
            <div class="shape-mockup jump-img d-none d-xl-block" data-right="2%" data-bottom="8%"><img loading="lazy" src="{{asset('template/assets/img/shape/b-s-1-4.png')}}" alt="shape"></div>
            <div class="container">
                <div class="row vs-carousel text-center" data-slide-show="6" data-lg-slide-show="4" data-md-slide-show="3" data-sm-slide-show="2" data-xs-slide-show="2">
                    <div class="col-auto">
                        <img loading="lazy" src="{{asset('template/assets/img/brand/b-1-1.png')}}" alt="brand">
                    </div>
                    <div class="col-auto">
                        <img loading="lazy" src="{{asset('template/assets/img/brand/b-1-2.png')}}" alt="brand">
                    </div>
                    <div class="col-auto">
                        <img loading="lazy" src="{{asset('template/assets/img/brand/b-1-3.png')}}" alt="brand">
                    </div>
                    <div class="col-auto">
                        <img loading="lazy" src="{{asset('template/assets/img/brand/b-1-4.png')}}" alt="brand">
                    </div>
                    <div class="col-auto">
                        <img loading="lazy" src="{{asset('template/assets/img/brand/b-1-5.png')}}" alt="brand">
                    </div>
                    <div class="col-auto">
                        <img loading="lazy" src="{{asset('template/assets/img/brand/b-1-6.png')}}" alt="brand">
                    </div>
                    <div class="col-auto">
                        <img loading="lazy" src="{{asset('template/assets/img/brand/b-1-3.png')}}" alt="brand">
                    </div>
                </div>
            </div>
        </div>
@endsection
