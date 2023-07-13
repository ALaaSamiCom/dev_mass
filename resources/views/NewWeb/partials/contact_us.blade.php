<style>
    .body {
        background-color: #F8F9FB;
    }
</style>
<section class="margin-nag10">
    <div class="container mb-5" data-aos="zoom-in" data-aos-easing="linear">
        <div
            class="row align-items-center bg-white shadow rounded-2 m-2 p-3 p-lg-5 consultation justify-content-around">
            <div class="col-12 col-lg-5 mt-5">
                <form method="POST" action="{{url('/send_consultation')}}" >
                    @csrf
                    <h3 class="mb-4 text-center">@lang('web.FREE_CONSULTATION')</h3>
                    <div class="row">
                        <div class="col-12 col-lg-6 mb-3">
                            <input type="text" name="name" class="form-control form-control-lg shadow-none"
                                   placeholder="@lang('web.FULL_NAME')"/>
                        </div>
                        <div class="col-12 col-lg-6 mb-3">
                            <input type="email" name="email" class="form-control form-control-lg shadow-none"
                                   placeholder="@lang('web.EMAIL')"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-lg-6 mb-3">
                            <select name="service_id" class="form-select form-select-lg shadow-none" aria-label="Default select example"
                                    placeholder="@lang('web.CHOOSE_SERVICE')">
                                <option value="-1">@lang('web.CHOOSE_SERVICE')</option>
                                @forelse($services as $service)
                                    <option value="{{$service->id}}">{{$service->title}}</option>
                                @empty @endforelse

                            </select>
                        </div>
                        <div class="col-12 col-lg-6 mb-3">
                            <input type="Phone" name="phone" class="form-control form-control-lg shadow-none"
                                   placeholder="@lang('web.PHONE')"/>
                        </div>
                    </div>
                    <textarea class="form-control mb-4 shadow-none" name="message" rows="4"
                              placeholder="@lang('web.MESSAGE')"></textarea>
                    <button type="submit"
                            class="btn btn-h-primary text-white rounded-pill px-5 mb-3">@lang('web.SUBMIT')</button>
                </form>
            </div>
            <div class="col-12 col-lg-5 datamap-contact">
                <h3 class="mb-4  text-center">@lang('web.PROJECT_IN_MIND')</h3>
                <div class="gmap_canvas mb-3">
                    <iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0"
                            marginwidth="0"
                            src="https://maps.google.com/maps?width=600&amp;height=420&amp;hl=en&amp;q=University of Oxford&amp;t=p&amp;z=17&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                </div>
                <div class="mb-3">
                    <a href="" class="d-flex align-items-center text-decoration-none">
                        <i class="fa-solid fa-envelope rounded-circle"></i>
                        <div class="px-3">
                            <p class="mb-2 fw-bold">@lang('web.CONTACT_US')</p>
                            <p class="m-0 fs-6">{{$setting->email}}</p>
                        </div>
                    </a>
                </div>
                <div class="mb-3">
                    <a href="" class="d-flex align-items-center text-decoration-none">
                        <i class="fa-solid fa-location-dot rounded-circle"></i>
                        <div class="px-3">
                            <p class="mb-2 fw-bold">@lang('web.LOCATION')</p>
                            <p class="m-0 text-dark fs-6">
                                {{$setting->place}}
                            </p>
                        </div>
                    </a>
                </div>


            </div>
        </div>
    </div>
</section>
