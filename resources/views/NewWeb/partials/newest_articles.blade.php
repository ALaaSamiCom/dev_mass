<section class="bg-light">
    <div class="container py-5 pb-3">
        <div class="row align-items-start mt-4">
            <div class="col-12 col-lg-8 px-lg-5  " data-aos="zoom-in-down" data-aos-easing="linear">
                <img src="{{asset('newweb_assets')}}/images/services.png" class="img-fluid rounded-2 w-100 shadow"/>
                <h3 class="text-primary mt-4">@lang('web.NEWEST')</h3>
                <p>{!! $last_article->title !!}</p>
                <p>{!! $last_article->description !!}</p>
                <p>{{ $last_article->created_at }}</p>
            </div>
            <div class="col-12 col-lg-4 Newest">
                @forelse($last_five_articles as $article)
                    <div class="card border-0 align-items-center mb-3 Newest-list" data-aos="fade-up"
                         data-aos-easing="linear">
                        <div class="row g-0">
                            <div class="col-md-5">
                                <img src="{{asset('newweb_assets')}}/images/services.png"
                                     class="img-fluid rounded-2 shadow"/>
                            </div>
                            <div class="col-md">
                                <div class="card-body">
                                    <p class="text-primary m-0">{!! $article->title !!}</p>
                                    <h5 class="card-title mb-4">{!! $article->description !!}</h5>
                                    <p class="text-primary">
                                        <i class="fa-solid fa-arrow-right-long"></i>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="card border-0 align-items-center mb-3 Newest-list" data-aos="fade-up"
                         data-aos-easing="linear">
                        <div class="row g-0">
                            <div class="col-md-5">
                                <img src="{{asset('newweb_assets')}}/images/services.png"
                                     class="img-fluid rounded-2 shadow"/>
                            </div>
                            <div class="col-md">
                                <div class="card-body">
                                    <p class="text-primary m-0">Life of DEVUN</p>
                                    <h5 class="card-title mb-4">Meet our Devun team</h5>
                                    <p class="text-primary">
                                        <i class="fa-solid fa-arrow-right-long"></i>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card border-0 align-items-center mb-3 Newest-list" data-aos="fade-up"
                         data-aos-easing="linear">
                        <div class="row g-0">
                            <div class="col-md-5">
                                <img src="{{asset('newweb_assets')}}/images/services.png"
                                     class="img-fluid rounded-2 shadow"/>
                            </div>
                            <div class="col-md">
                                <div class="card-body">
                                    <p class="text-primary m-0">Life of DEVUN</p>
                                    <h5 class="card-title mb-4">Meet our Devun team</h5>
                                    <p class="text-primary">
                                        <i class="fa-solid fa-arrow-right-long"></i>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card border-0 align-items-center mb-3 Newest-list" data-aos="fade-up"
                         data-aos-easing="linear">
                        <div class="row g-0">
                            <div class="col-md-5">
                                <img src="{{asset('newweb_assets')}}/images/services.png"
                                     class="img-fluid rounded-2 shadow"/>
                            </div>
                            <div class="col-md">
                                <div class="card-body">
                                    <p class="text-primary m-0">Life of DEVUN</p>
                                    <h5 class="card-title mb-4">Meet our Devun team</h5>
                                    <p class="text-primary">
                                        <i class="fa-solid fa-arrow-right-long"></i>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card border-0 align-items-center mb-3 Newest-list" data-aos="fade-up"
                         data-aos-easing="linear">
                        <div class="row g-0">
                            <div class="col-md-5">
                                <img src="{{asset('newweb_assets')}}/images/services.png"
                                     class="img-fluid rounded-2 shadow"/>
                            </div>
                            <div class="col-md">
                                <div class="card-body">
                                    <p class="text-primary m-0">Life of DEVUN</p>
                                    <h5 class="card-title mb-4">Meet our Devun team</h5>
                                    <p class="text-primary">
                                        <i class="fa-solid fa-arrow-right-long"></i>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card border-0 align-items-center mb-3 Newest-list" data-aos="fade-up"
                         data-aos-easing="linear">
                        <div class="row g-0">
                            <div class="col-md-5">
                                <img src="{{asset('newweb_assets')}}/images/services.png"
                                     class="img-fluid rounded-2 shadow"/>
                            </div>
                            <div class="col-md">
                                <div class="card-body">
                                    <p class="text-primary m-0">Life of DEVUN</p>
                                    <h5 class="card-title mb-4">Meet our Devun team</h5>
                                    <p class="text-primary">
                                        <i class="fa-solid fa-arrow-right-long"></i>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</section>
