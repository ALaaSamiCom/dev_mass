<article>
    <div class="container position-relative my-5 pt-3">
        <div class="row justify-content-between align-items-center ">
            <div class="col-12 col-lg-5" data-aos="zoom-out-up" data-aos-easing="linear">
                <h2 class="text-primary">{{$service->title}}</h2>
                <p>
                    {{$service->description}}
                </p>
            </div>
            <div class="col-12 col-lg-6" data-aos="zoom-in-down" data-aos-easing="linear">
                <img src="{{asset('newweb_assets')}}/images/Services.png" class="img-fluid rounded-3 shadow"/>
            </div>
        </div>
        <img src="{{asset('newweb_assets')}}/images/services.svg"
             class="position-absolute top-0 start-0 translate-middle z-index">
    </div>
</article>

<section>
    <div class="container mt-5 mb-5 position-relative">
        <img src="{{asset('newweb_assets')}}/images/iii.svg" class=" position-absolute top-0 end-0 z-index">
        <div class="row Service-Features">
            <h3 class="fw-bold text-center" data-aos="zoom-in-down" data-aos-easing="linear">Service Features</h3>
            <p class="text-center" data-aos="zoom-in-down" data-aos-easing="linear">We assign you a manager for your
                technical project</p>
            @forelse($service->features as $feature)
                <div class="col-12 col-lg-4 my-4" data-aos="zoom-in-up">
                    <div class="position-relative text-center bg-light p-3 px-4 pt-5 mt-4">
                        <div
                            class="d-inline-block bg-primary rounded-circle position-absolute top-0 start-50 translate-middle p-4">
                            <img src="{{asset('newweb_assets')}}/images/smaill.svg" width="50" height="50"/>
                        </div>
                        <h5 class="my-3">{{$feature->title}}</h5>
                        <p>{!! $feature->description !!}</p>
                    </div>
                </div>
            @empty

            @endforelse
{{--            <div class="col-12 col-lg-4 my-4" data-aos="zoom-in-up">--}}
{{--                <div class="position-relative text-center bg-light p-3 px-4 pt-5 mt-4">--}}
{{--                    <div--}}
{{--                        class="d-inline-block bg-primary rounded-circle position-absolute top-0 start-50 translate-middle p-4">--}}
{{--                        <img src="{{asset('newweb_assets')}}/images/code.svg" width="50" height="50"/>--}}
{{--                    </div>--}}
{{--                    <h5 class="my-3">Flexible Layouts</h5>--}}
{{--                    <p>DEVUN Provide a flexible way to design and adjust layout for different screen sizes</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-12 col-lg-4 my-4" data-aos="zoom-in-up">--}}
{{--                <div class="position-relative text-center bg-light p-3 px-4 pt-5 mt-4">--}}
{{--                    <div--}}
{{--                        class="d-inline-block bg-primary rounded-circle position-absolute top-0 start-50 translate-middle p-4">--}}
{{--                        <img src="{{asset('newweb_assets')}}/images/easy custom.svg" width="50" height="50"/>--}}
{{--                    </div>--}}
{{--                    <h5 class="my-3">Flexible Layouts</h5>--}}
{{--                    <p>DEVUN Provide a flexible way to design and adjust layout for different screen sizes</p>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>
</section>
