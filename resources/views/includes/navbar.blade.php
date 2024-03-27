<!--==============================
    Header Area
    ==============================-->
    <header class="vs-header header-layout1">
        <div class="sticky-wrap">
            <div class="sticky-active">
                <div class="container">
                    <div class="row justify-content-between align-items-center gx-60">
                        <div class="col">
                            <div class="header-logo">
                                <a href="{{route('index')}}"><img src="{{asset('template/assets/img/logokikira.svg')}}" alt="logo"></a>
                            </div>
                        </div>
                        <div class="col-auto">
                            <nav class="main-menu menu-style1 d-none d-lg-block">
                                <ul>
                                    <li>
                                        <x-nav-link :href="route('index')" :active="request()->routeIs('index')">
                                            {{ __('Home') }}
                                        </x-nav-link>
                                    </li>
                                    {{-- <li>
                                        <x-nav-link :href="route('pages.landing-pages.aboutus')" :active="request()->routeIs('pages.landing-pages.aboutus')">
                                            {{ __('About Us') }}
                                        </x-nav-link>
                                    </li>
                                    <li>
                                        <x-nav-link :href="route('pages.landing-pages.service')" :active="request()->routeIs('pages.landing-pages.service')">
                                            {{ __('Service') }}
                                        </x-nav-link>
                                    </li> --}}
                                    <li>
                                        <x-nav-link :href="route('pages.landing-pages.gallery')" :active="request()->routeIs('pages.landing-pages.gallery')">
                                            {{ __('Gallery') }}
                                        </x-nav-link>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="col-auto">
                            <div class="header-icons">
                                <a href="contact.html" class="vs-btn style2 d-none d-xl-inline-block">{{__('Contact Us')}}</a>
                                <button class="vs-menu-toggle d-inline-block d-lg-none" type="button"><i class="fal fa-bars"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
