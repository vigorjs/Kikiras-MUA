<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        {{-- Meta  --}}
        @include('includes.meta')

        <title>@yield('title')</title>

		<!-- Favicons - Place favicon.ico in the root directory -->
        <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
        <link rel="icon" href="assets/img/favicon.ico" type="image/x-icon">

        {{-- Style  --}}
        @stack('before-style')
            @include('includes.style')
        @stack('after-style')

    </head>

    <body>

        {{-- Preloader --}}
        @include('includes.preloader')

        {{-- Content --}}
        @include('includes.navbar-mobile')
        @include('includes.navbar')
            @yield('content')
        @include('includes.footer')

        {{-- Script --}}
		@stack('before-script')
            @include('includes.script')
        @stack('after-script')

        <!-- Scroll To Top -->
        <a href="#" class="scrollToTop scroll-btn"><i class="far fa-arrow-up"></i></a>

    </body>

</html>
