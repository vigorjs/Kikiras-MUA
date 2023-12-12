
@extends('layouts.app')

@section('title', 'Layanan Make Up Profesional')

@section('content')


    <!-- Breadcumb -->
    <div class="breadcumb-wrapper " data-bg-src="{{asset('template/assets/img/breadcumb/gallerybreadcumb.jpg')}}">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Our <span class="inner-text">Gallery</span></h1>
                <div class="breadcumb-menu-wrap">
                    <ul class="breadcumb-menu">
                        <li><a href="{{route('index')}}">Home</a></li>
                        <li>Our <span class="inner-text">Gallery</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Gallery Area -->
    <section class="space">
        <div class="container">
            <div class="row gy-gx filter-active">
                @foreach ($profile as $profile)
                <?php
                    $media_url = $profile->url;
                    $caption = $profile->caption;
                ?>
                    <div class="col-md-6 col-xxl-auto filter-item">
                        <div class="gallery-style1">
                            <div class="gallery-img">
                                <img src="{{url($media_url)}}" alt="{{$caption}}" class="w-100 img-fluid" loading="lazy">
                            </div>
                            <div class="gallery-shape" data-overlay="white" data-opacity="9"></div>
                            <div class="gallery-content">
                                <a href="{{url($media_url)}}" class="gallery-btn popup-image"><i class="fal fa-plus"></i></a>
                                <h3 class="gallery-title"><a href="gallery-details.html" class="text-inherit">{{$caption}}</a></h3>
                                <span class="gallery-tag">Makeupbykikiraa</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Custom CSS -->
    <style>
        /* Adjust the width of columns to control the size of parent elements */
        .col-xxl-auto {
            max-width: 50%; /* Adjust this value as needed */
        }
    </style>


@endsection
