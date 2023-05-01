<!--START testimonial-->
<section id="testimonial" class="atf-align-items-details section">
    <div class="atf-section-padding">
        <div class="container">
            <div class="section-header  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s"
                 data-wow-offset="0"
                 style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInUp;">
                <h2 class="section-title">{{$section->title}}
                    <span class="circle"></span>
                </h2>
                <p class="section-description">{{$section->description}}</p>
            </div>
            <div class="row clearfix">
                <div class="col-md-12 col-lg-12">
                    <div class="testimonial-owl owl-carousel">
                    @forelse($testmonials as $testmonial)
                        <div class="testimonial-example">
                            <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                                <div class="toast-header">
                                    <img src="{{$testmonial->image->geturl()}}" class="me-2 client-image"
                                         alt="{{$testmonial->name}}">
                                    <p class="me-auto client-name">{{$testmonial->name}}
                                        <br>
                                        <span class="me-auto client-postion">{{$testmonial->jop_title}}</span>
                                    </p>
                                </div>
                                <div class="toast-body">
                                    <p class="client-opinion ">
                                        “{{$testmonial->text}}”
                                    </p>
                                    <div class="rating">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="testimonial-example">
                            <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                                <div class="toast-header">
                                    <img src="assets/img/clients/client.png" class="me-2 client-image"
                                         alt="client">
                                    <p class="me-auto client-name">Sabo Masties
                                        <br>
                                        <span class="me-auto client-postion">Founder at Rolex</span>
                                    </p>
                                </div>
                                <div class="toast-body">
                                    <p class="client-opinion ">
                                        “And residence for met the
                                        estimable disposing. Mean if he
                                        they been no hold mr.”
                                    </p>
                                    <div class="rating">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-example">
                            <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                                <div class="toast-header">
                                    <img src="assets/img/clients/client.png" class="me-2 client-image"
                                         alt="client">
                                    <p class="me-auto client-name">Sabo Masties
                                        <br>
                                        <span class="me-auto client-postion">Founder at Rolex</span>
                                    </p>
                                </div>
                                <div class="toast-body">
                                    <p class="client-opinion ">
                                        “And residence for met the
                                        estimable disposing. Mean if he
                                        they been no hold mr.”
                                    </p>
                                    <div class="rating">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-example">
                            <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                                <div class="toast-header">
                                    <img src="assets/img/clients/client.png" class="me-2 client-image"
                                         alt="client">
                                    <p class="me-auto client-name">Sabo Masties
                                        <br>
                                        <span class="me-auto client-postion">Founder at Rolex</span>
                                    </p>
                                </div>
                                <div class="toast-body">
                                    <p class="client-opinion ">
                                        “And residence for met the
                                        estimable disposing. Mean if he
                                        they been no hold mr.”
                                    </p>
                                    <div class="rating">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforelse




                    </div>
                </div><!-- END COL  -->
            </div>
        </div>
    </div>
</section>
<!--End testimonial-->
