<!--Start Footer-->
<footer class="bg-footer-grid">
    <div class="bg-footer-grid2">
        <div class="container" data-aos="zoom-in-down" data-aos-easing="linear">
            <div class="row mb-4">
                <div class="col-12 col-lg-6 mx-auto text-white text-center ">
                    <h4 class="mb-4">@lang('web.FOOTER_TITLE')
                    </h4>
                    <p class="fw-light">@lang('web.FOOTER_DESCRIPTION')</p>
                </div>
            </div>
            <div class="row g-3 Contact mb-5 col-10 mx-auto">
                <a href="" class="col d-flex align-items-center text-decoration-none text-white">
                    <i class="fa-solid fa-phone"></i>
                    <div>
                        <p class="fs-14 mb-1 fw-light">@lang('web.CONTACT_US')</p>
                        <p class="m-0">+{{$setting->phone}}</p>
                    </div>
                </a>
                <a href="" class="col d-flex align-items-center text-decoration-none text-white">
                    <i class="fa-solid fa-envelope"></i>
                    <div>
                        <p class="fs-14 mb-1 fw-light">@lang('web.CONTACT_US')</p>
                        <p class="m-0">https://devun.net/en</p>
                    </div>
                </a>
                <a href="" class="col d-flex align-items-center text-decoration-none text-white">
                    <i class="fa-solid fa-share-nodes"></i>
                    <div>
                        <p class="fs-14 mb-1 fw-light">@lang('web.CONTACT_US')</p>
                        <p class="m-0">{{$setting->email}}</p>
                    </div>
                </a>
            </div>
            <div class="row justify-content-around row-links">
                <div class="col-lg-6">
                    <p class="tit-link">{{ $about_us_section->title }}</p>
                    <p class="tit-link">{!! $about_us_section->description !!}</p>
                </div>
                <div class="col-lg-2">
                    <p class="tit-link">@lang('web.LINKS')</p>
                    <a href="{{url('/')}}" class="text-decoration-none">@lang('web.HOME')</a>
                    <a href="#EXPLORE_SERVICES" class="text-decoration-none">@lang('web.SERVICES')</a>
                    <a href="{{url('/portfolio')}}" class="text-decoration-none">@lang('web.PORTFOLIO')</a>
                    <a href="{{url('/our_company')}}" class="text-decoration-none">@lang('web.OUR_COMPANY')</a>
                    <a href="{{url('/blog')}}" class="text-decoration-none">@lang('web.BLOG')</a>
                </div>

                <div class="col-lg-2">
                    <p class="tit-link">Get in touch</p>
                    <a href="" class="text-decoration-none">{{$setting->place}}</a>
                    <a href="tel:{{$setting->phone}}" class="text-decoration-none">+{{$setting->phone}}</a>
                    <a href="mail:{{$setting->email}}" class="text-decoration-none">{{$setting->email}}</a>
                </div>
            </div>
            <hr class="border-light">
            <div
                class="d-flex justify-content-center align-items-center text-center  justify-content-lg-between flex-column flex-lg-row">
                <p class="text-white fs-14">{{$setting->place}}</p>
                <div>

                    @forelse ($links as $link)
                        <a href="{{$link->value}}" class="icon text-decoration-none text-white px-1">
                            <i class="fa-brands fa-{{$link->title}}"></i>
                        </a>
                    @empty
                        <a class="text-decoration-none text-white px-1" href="#"><i
                                class="fa-brands fa-linkedin"></i></a>
                        <a class="text-decoration-none text-white px-1" href="#"><i
                                class="fa-brands fa-twitter"></i></a>
                        <a class="text-decoration-none text-white px-1" href="#"><i class="fa-brands fa-instagram"></i></a>
                    @endforelse
                </div>

            </div>
        </div>
    </div>
</footer>
<!--End Footer-->
