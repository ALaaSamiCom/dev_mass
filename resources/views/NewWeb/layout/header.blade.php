<!-- START PRELOADER -->
{{--<div class="atf-preloader">--}}
{{--    <div class="atf-status">--}}
{{--        <div class="atf-status-mes"></div>--}}
{{--    </div>--}}
{{--</div>--}}
<!--  END PRELOADER -->
{{--<!-- START back-to-top -->--}}
{{--<button class="atf-scroll-top atf-back-to-top" data-targets="html">--}}
{{--    <i class="fa fa-angle-up atf-scrollup-icon"></i>--}}
{{--</button>--}}
{{--<!-- END back-to-top-->--}}
<!-- Start Header Section -->
<header class="position-absolute w-100 z-index-100">
    <div class="container d-flex align-items-center justify-content-center justify-content-lg-between py-2">
        <div class="px-1">
            <a class="text-decoration-none text-white px-1" href="tel:{{$setting->phone}}">
                <svg xmlns="http://www.w3.org/2000/svg" width="16.499" height="16.499" viewBox="0 0 16.499 16.499">
                    <g id="Iconly_Light_Call" data-name="Iconly/Light/Call" transform="translate(1.251 1.248)">
                        <g id="Call">
                            <path id="Stroke_1" data-name="Stroke 1"
                                  d="M6.655,7.348c2.939,2.939,3.606-.461,5.478,1.409,1.8,1.8,2.841,2.165.555,4.45-.286.23-2.106,3-8.5-3.393S.561,1.6.791,1.314C3.083-.977,3.438.066,5.242,1.87,7.114,3.741,3.716,4.41,6.655,7.348Z"
                                  transform="translate(0 0)" fill="none" stroke="#fff" stroke-linecap="round"
                                  stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2.5"/>
                        </g>
                    </g>
                </svg>
                <span class="d-none d-lg-inline fs-14">+{{$setting->phone}}</span>
            </a>
            <a class="text-decoration-none text-white px-1 px-lg-4" href="mail:{{$setting->email}}">
                <svg xmlns="http://www.w3.org/2000/svg" width="16.942" height="15.447" viewBox="0 0 16.942 15.447">
                    <g id="Message" transform="translate(1 1)">
                        <path id="Stroke_1" data-name="Stroke 1" d="M8.8,0,5.484,2.7a1.716,1.716,0,0,1-2.137,0L0,0"
                              transform="translate(3.077 4.371)" fill="none" stroke="#fff" stroke-linecap="round"
                              stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"/>
                        <path id="Stroke_3" data-name="Stroke 3"
                              d="M11.138,13.447a3.88,3.88,0,0,0,3.8-4.155V4.161A3.889,3.889,0,0,0,11.138,0H3.8A3.889,3.889,0,0,0,0,4.161V9.292a3.88,3.88,0,0,0,3.8,4.155Z"
                              transform="translate(0 0)" fill="none" stroke="#fff" stroke-linecap="round"
                              stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"/>
                    </g>
                </svg>
                <span class="d-none d-lg-inline fs-14">{{$setting->email}}</span>
            </a>
        </div>
        <div>
            @forelse ($links as $link)
                <a href="{{$link->value}}" class="icon text-decoration-none text-white px-1">
                    <i class="fab fa-{{$link->title}}"></i>
                </a>
            @empty
                <a class="text-decoration-none text-white px-1" href="#"><i class="fa-brands fa-linkedin"></i></a>
                <a class="text-decoration-none text-white px-1" href="#"><i class="fa-brands fa-twitter"></i></a>
                <a class="text-decoration-none text-white px-1" href="#"><i class="fa-brands fa-instagram"></i></a>
            @endforelse
        </div>
    </div>
    <div class="container-fluid text-white" id="socrll-sec">
        <nav class="container navbar navbar-expand-lg">
            <a class="navbar-brand me-3 me-xl-5" href="{{url('/')}}"><img
                    src="{{asset('newweb_assets')}}/images/logo.png" width="200"
                    class="img-fluid"></a>
            <div class=" d-flex d-lg-none align-items-center">
                <button class="navbar-toggler border-0 shadow-0 text-white" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <i class="fa-solid fa-bars"></i>
                </button>
            </div>
            <div class="d-flex flex-lg-row justify-content-lg-between align-items-center offcanvas offcanvas-end w-75"
                 id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <ul class="navbar-nav justify-content-between align-items-center   w-100">
                    <li class="nav-item">
                        <a class="nav-link nav-link-title"
                           href="{{url('/')}}">@lang('web.HOME')</a>
                    </li>
                    <li class="nav-item dropdown text-center">
                        <a class="nav-link  dropdown-toggle" href="#EXPLORE_SERVICES"
                           role="button"
                           data-bs-toggle="dropdown"
                           aria-expanded="false">
                            @lang('web.SERVICES')
                        </a>
                        <div class="dropdown-menu p-1">
                            @forelse( $services->chunk(2) as $chunk)
                                <div class="d-flex">
                                    @foreach($chunk as $service)
                                        <a class="dropdown-item"
                                           href="{{url('/services/'.$service->id)}}">
                                            <img src="{{asset('newweb_assets')}}/{{$service->image}}" width="40"
                                                 class="p-2">{{$service->title}}
                                        </a>
                                    @endforeach
                                </div>
                            @empty
                            @endforelse
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('/portfolio')}}"
                           class="nav-link nav-link-title">@lang('web.PORTFOLIO')</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('/our_company')}}"
                           class="nav-link nav-link-title">@lang('web.OUR_COMPANY')</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('/blog')}}"
                           class="nav-link nav-link-title">@lang('web.BLOG')</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('/quote')}}"
                           class="nav-link btn btn-outline-white rounded-pill py-2 px-4">@lang('web.FREE_QUOTE')</a>
                    </li>


                    <li class="nav-item ms-lg-auto">
                        <a class="nav-link" href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
                    </li>
                    <li class="nav-item">
                        @if(\App::getLocale()=='en')
                            <a class="nav-link btn btn-outline-white rounded-pill py-1 px-3 "
                               href="{{ LaravelLocalization::getLocalizedURL('ar') }}"> AR <img
                                    src="{{asset('newweb_assets')}}/images/sodui.svg" class="ps-1"/> </a>
                        @else
                            <a class="nav-link btn btn-outline-white rounded-pill py-1 px-3 "
                               href="{{ LaravelLocalization::getLocalizedURL('en') }}"> EN <img
                                    src="{{asset('newweb_assets')}}/images/english.svg" class="ps-1"/> </a>
                        @endif

                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
<!-- End Header Section -->
