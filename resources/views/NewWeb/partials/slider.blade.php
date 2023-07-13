<!-- START HOME -->
<div class="video-background">
    <video autoplay loop muted>
        <source src="{{asset('newweb_assets')}}/images/pexels-pavel-danilyuk-5495781-2560x1080-30fps.mp4"
                type="video/mp4">
    </video>
    <div class="video-overlay"></div>
</div>

<section class="sliderhome ">
    <div class="swiper Swipersliderhome">
        <div class="swiper-wrapper h-100 w-100">
            @forelse($sliders as $slider)
                <div class="swiper-slide" data-aos="zoom-in-down">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <div class="text-center text-lg-start">
                                <h1 class="text-white title">{{$slider->title}}</h1>
                                <p class="sup-title text-white">{!!$slider->description!!}</p>
                                <a href="#EXPLORE_SERVICES" class="btn rounded-0 btn-h-primary text-white me-2 me-lg-4">
                                    <i class="fa-regular fa-compass"></i>
                                    @lang('web.EXPLORE_SERVICES')</a>
                                <a href="{{url('/portfolio')}}"
                                   class="btn btn-outline-white rounded-0">@lang('web.VIEW_PORTFOLIO')</a>
                            </div>
                        </div>
                    </div>
                </div>
            @empty

                <div class="swiper-slide" data-aos="zoom-in-down">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <div class="text-center text-lg-start">
                                <h1 class="text-white title">Worlds of technical solution to realize your vision.</h1>
                                <p class="sup-title text-white">We assign you a manager for your technical project</p>
                                <a href="" class="btn rounded-0 btn-h-primary text-white me-2 me-lg-4">
                                    <i class="fa-regular fa-compass"></i>
                                    Explore Services</a>
                                <a href="" class="btn btn-outline-white rounded-0">View Portfolio</a>
                            </div>
                        </div>
                    </div>
                </div>

            @endforelse

        </div>
        <div class="swiper-pagination"></div>
    </div>
</section>


