<!--START testimonial-->
<section>
    <div class="container mb-5 pb-3">
        <div class="row">
            <h3 class="fw-bold col-lg-6 mx-auto text-center mb-4" data-aos="zoom-in-down" data-aos-easing="linear">
                Don't take our word for it. See what customers
                are
                saying about us.</h3>
            <div class="swiper swiper-saying" data-aos="fade-up" data-aos-easing="linear">
                <div class="swiper-wrapper">
                    @forelse($testimonials as $testimonial)
                        <div class="swiper-slide">
                            <div class="card p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{asset('newweb_assets')}}/images/project1.png" width="70"
                                         class="rounded-circle"/>
                                    <div class="mx-3">
                                        <h6 class="fw-bold">{{$testimonial->name}}</h6>
                                        <p class="m-0 fs-14 revew">{{$testimonial->job_title}}</p>
                                    </div>
                                </div>
                                <p class="revew">{{$testimonial->text}}</p>
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#EFEFEF"
                                         class="bi bi-star-fill color" viewBox="0 0 16 16">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#EFEFEF"
                                         class="bi bi-star-fill color" viewBox="0 0 16 16">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#EFEFEF"
                                         class="bi bi-star-fill color" viewBox="0 0 16 16">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#EFEFEF"
                                         class="bi bi-star-fill color" viewBox="0 0 16 16">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#EFEFEF"
                                         class="bi bi-star-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="swiper-slide">
                            <div class="card p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{asset('newweb_assets')}}/images/project1.png" width="70"
                                         class="rounded-circle"/>
                                    <div class="mx-3">
                                        <h6 class="fw-bold">Sabo Masties</h6>
                                        <p class="m-0 fs-14 revew">Founder at Rolex</p>
                                    </div>
                                </div>
                                <p class="revew">“And residence for met the
                                    estimable disposing. Mean if he
                                    they been no hold mr.”</p>
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#EFEFEF"
                                         class="bi bi-star-fill color" viewBox="0 0 16 16">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#EFEFEF"
                                         class="bi bi-star-fill color" viewBox="0 0 16 16">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#EFEFEF"
                                         class="bi bi-star-fill color" viewBox="0 0 16 16">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#EFEFEF"
                                         class="bi bi-star-fill color" viewBox="0 0 16 16">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#EFEFEF"
                                         class="bi bi-star-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{asset('newweb_assets')}}/images/project1.png" width="70"
                                         class="rounded-circle"/>
                                    <div class="mx-3">
                                        <h6 class="fw-bold">Sabo Masties</h6>
                                        <p class="m-0 fs-14 revew">Founder at Rolex</p>
                                    </div>
                                </div>
                                <p class="revew">“And residence for met the
                                    estimable disposing. Mean if he
                                    they been no hold mr.”</p>
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#EFEFEF"
                                         class="bi bi-star-fill color" viewBox="0 0 16 16">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#EFEFEF"
                                         class="bi bi-star-fill color" viewBox="0 0 16 16">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#EFEFEF"
                                         class="bi bi-star-fill color" viewBox="0 0 16 16">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#EFEFEF"
                                         class="bi bi-star-fill color" viewBox="0 0 16 16">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#EFEFEF"
                                         class="bi bi-star-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{asset('newweb_assets')}}/images/project1.png" width="70"
                                         class="rounded-circle"/>
                                    <div class="mx-3">
                                        <h6 class="fw-bold">Sabo Masties</h6>
                                        <p class="m-0 fs-14 revew">Founder at Rolex</p>
                                    </div>
                                </div>
                                <p class="revew">“And residence for met the
                                    estimable disposing. Mean if he
                                    they been no hold mr.”</p>
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#EFEFEF"
                                         class="bi bi-star-fill color" viewBox="0 0 16 16">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#EFEFEF"
                                         class="bi bi-star-fill color" viewBox="0 0 16 16">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#EFEFEF"
                                         class="bi bi-star-fill color" viewBox="0 0 16 16">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#EFEFEF"
                                         class="bi bi-star-fill color" viewBox="0 0 16 16">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#EFEFEF"
                                         class="bi bi-star-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{asset('newweb_assets')}}/images/project1.png" width="70"
                                         class="rounded-circle"/>
                                    <div class="mx-3">
                                        <h6 class="fw-bold">Sabo Masties</h6>
                                        <p class="m-0 fs-14 revew">Founder at Rolex</p>
                                    </div>
                                </div>
                                <p class="revew">“And residence for met the
                                    estimable disposing. Mean if he
                                    they been no hold mr.”</p>
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#EFEFEF"
                                         class="bi bi-star-fill color" viewBox="0 0 16 16">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#EFEFEF"
                                         class="bi bi-star-fill color" viewBox="0 0 16 16">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#EFEFEF"
                                         class="bi bi-star-fill color" viewBox="0 0 16 16">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#EFEFEF"
                                         class="bi bi-star-fill color" viewBox="0 0 16 16">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#EFEFEF"
                                         class="bi bi-star-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{asset('newweb_assets')}}/images/project1.png" width="70"
                                         class="rounded-circle"/>
                                    <div class="mx-3">
                                        <h6 class="fw-bold">Sabo Masties</h6>
                                        <p class="m-0 fs-14 revew">Founder at Rolex</p>
                                    </div>
                                </div>
                                <p class="revew">“And residence for met the
                                    estimable disposing. Mean if he
                                    they been no hold mr.”</p>
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#EFEFEF"
                                         class="bi bi-star-fill color" viewBox="0 0 16 16">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#EFEFEF"
                                         class="bi bi-star-fill color" viewBox="0 0 16 16">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#EFEFEF"
                                         class="bi bi-star-fill color" viewBox="0 0 16 16">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#EFEFEF"
                                         class="bi bi-star-fill color" viewBox="0 0 16 16">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#EFEFEF"
                                         class="bi bi-star-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    @endforelse

                </div>
                <div
                    class="position-absolute bottom-0 start-50 translate-middle-x d-flex justify-content-center align-items-center bg-light">
                    <div class="swiper-prev"><i class="fa-solid fa-arrow-left-long"></i></div>
                    <div class="swiper-next"><i class="fa-solid fa-arrow-right-long"></i></div>
                </div>
            </div>
        </div>
    </div>
</section>

{{--<section id="testimonial" class="atf-align-items-details section">--}}
{{--    <div class="atf-section-padding">--}}
{{--        <div class="container">--}}
{{--            <div class="section-header  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s"--}}
{{--                 data-wow-offset="0"--}}
{{--                 style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInUp;">--}}
{{--                <h2 class="section-title">{{$section->title}}--}}
{{--                    <span class="circle"></span>--}}
{{--                </h2>--}}
{{--                <p class="section-description">{{$section->description}}</p>--}}
{{--            </div>--}}
{{--            <div class="row clearfix">--}}
{{--                <div class="col-md-12 col-lg-12">--}}
{{--                    <div class="testimonial-owl owl-carousel">--}}
{{--                    @forelse($testmonials as $testmonial)--}}
{{--                        <div class="testimonial-example">--}}
{{--                            <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">--}}
{{--                                <div class="toast-header">--}}
{{--                                    <img src="{{$testmonial->image->geturl()}}" class="me-2 client-image"--}}
{{--                                         alt="{{$testmonial->name}}">--}}
{{--                                    <p class="me-auto client-name">{{$testmonial->name}}--}}
{{--                                        <br>--}}
{{--                                        <span class="me-auto client-postion">{{$testmonial->jop_title}}</span>--}}
{{--                                    </p>--}}
{{--                                </div>--}}
{{--                                <div class="toast-body">--}}
{{--                                    <p class="client-opinion ">--}}
{{--                                        “{{$testmonial->text}}”--}}
{{--                                    </p>--}}
{{--                                    <div class="rating">--}}
{{--                                        <span class="fa fa-star checked"></span>--}}
{{--                                        <span class="fa fa-star checked"></span>--}}
{{--                                        <span class="fa fa-star checked"></span>--}}
{{--                                        <span class="fa fa-star checked"></span>--}}
{{--                                        <span class="fa fa-star"></span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    @empty--}}
{{--                        <div class="testimonial-example">--}}
{{--                            <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">--}}
{{--                                <div class="toast-header">--}}
{{--                                    <img src="{{asset('newweb_assets')}}/img/clients/client.png" class="me-2 client-image"--}}
{{--                                         alt="client">--}}
{{--                                    <p class="me-auto client-name">Sabo Masties--}}
{{--                                        <br>--}}
{{--                                        <span class="me-auto client-postion">Founder at Rolex</span>--}}
{{--                                    </p>--}}
{{--                                </div>--}}
{{--                                <div class="toast-body">--}}
{{--                                    <p class="client-opinion ">--}}
{{--                                        “And residence for met the--}}
{{--                                        estimable disposing. Mean if he--}}
{{--                                        they been no hold mr.”--}}
{{--                                    </p>--}}
{{--                                    <div class="rating">--}}
{{--                                        <span class="fa fa-star checked"></span>--}}
{{--                                        <span class="fa fa-star checked"></span>--}}
{{--                                        <span class="fa fa-star checked"></span>--}}
{{--                                        <span class="fa fa-star checked"></span>--}}
{{--                                        <span class="fa fa-star"></span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="testimonial-example">--}}
{{--                            <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">--}}
{{--                                <div class="toast-header">--}}
{{--                                    <img src="{{asset('newweb_assets')}}/img/clients/client.png" class="me-2 client-image"--}}
{{--                                         alt="client">--}}
{{--                                    <p class="me-auto client-name">Sabo Masties--}}
{{--                                        <br>--}}
{{--                                        <span class="me-auto client-postion">Founder at Rolex</span>--}}
{{--                                    </p>--}}
{{--                                </div>--}}
{{--                                <div class="toast-body">--}}
{{--                                    <p class="client-opinion ">--}}
{{--                                        “And residence for met the--}}
{{--                                        estimable disposing. Mean if he--}}
{{--                                        they been no hold mr.”--}}
{{--                                    </p>--}}
{{--                                    <div class="rating">--}}
{{--                                        <span class="fa fa-star checked"></span>--}}
{{--                                        <span class="fa fa-star checked"></span>--}}
{{--                                        <span class="fa fa-star checked"></span>--}}
{{--                                        <span class="fa fa-star checked"></span>--}}
{{--                                        <span class="fa fa-star"></span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="testimonial-example">--}}
{{--                            <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">--}}
{{--                                <div class="toast-header">--}}
{{--                                    <img src="{{asset('newweb_assets')}}/img/clients/client.png" class="me-2 client-image"--}}
{{--                                         alt="client">--}}
{{--                                    <p class="me-auto client-name">Sabo Masties--}}
{{--                                        <br>--}}
{{--                                        <span class="me-auto client-postion">Founder at Rolex</span>--}}
{{--                                    </p>--}}
{{--                                </div>--}}
{{--                                <div class="toast-body">--}}
{{--                                    <p class="client-opinion ">--}}
{{--                                        “And residence for met the--}}
{{--                                        estimable disposing. Mean if he--}}
{{--                                        they been no hold mr.”--}}
{{--                                    </p>--}}
{{--                                    <div class="rating">--}}
{{--                                        <span class="fa fa-star checked"></span>--}}
{{--                                        <span class="fa fa-star checked"></span>--}}
{{--                                        <span class="fa fa-star checked"></span>--}}
{{--                                        <span class="fa fa-star checked"></span>--}}
{{--                                        <span class="fa fa-star"></span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    @endforelse--}}


{{--                    </div>--}}
{{--                </div><!-- END COL  -->--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
<!--End testimonial-->
