<!-- START HOME -->
{{--@dd($service->title)--}}
<section>
    <div class="bg-sec-img">
        <div class="d-flex align-items-center h-100 w-100 py-5 bg-img-container">
            <div class="container text-center mt-5" data-aos="zoom-in-down" data-aos-easing="linear">
                <h2 class="text-white">{{$service->title}}</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item text-white"><a class="text-white text-decoration-none"
                                                                  href="{{url('#EXPLORE_SERVICES')}}">@lang('web.SERVICES')</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">{{$service->title}}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- END HOME -->
