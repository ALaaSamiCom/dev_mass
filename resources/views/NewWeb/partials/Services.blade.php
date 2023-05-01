<!--START Our Services-->
<section id="our-services" class="atf-align-items-details section">
    <div class="atf-section-padding">
        <div class="container">
            <div class="section-header wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s"
                 data-wow-offset="0"
                 style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInUp;">
                <h2 class="section-title">{{$section->title}}
                    <span class="circle"></span>
                </h2>
                <p class="section-description">{{$section->shortـdescription}}</p>
            </div>
            <div class="row">
                @forelse ($services as $service)
                    <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                        <div class="single-col wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s"
                             data-wow-offset="0"
                             style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeIn;">
                            <div class="image">
                                <img src="{{$service->icon->geturl()}}" alt="web design">
                            </div>
                            <h2 class="service-name">{{$service->title}}</h2>
                            <p class="service-description">
                                {!!$service->description!!}
                            </p>
                            <a href="{{ url(\App::getLocale().'/service/'.$service->id.'/'.$service->title) }}" class="more-details">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15.698" height="10.216"
                                     viewBox="0 0 19.698 13.216">
                                    <path id="Path_6877" data-name="Path 6877"
                                          d="M220.912,200.437h13.814l-3.083,3.021a1.322,1.322,0,1,0,1.85,1.888l5.4-5.287h0a1.312,1.312,0,0,0,0-1.887h0l-5.4-5.287a1.322,1.322,0,1,0-1.849,1.888l3.083,3.021H220.912a1.322,1.322,0,0,0,0,2.643Z"
                                          transform="translate(-219.59 -192.507)" fill="#fff" />
                                </svg>

                            </a>
                        </div>
                    </div>
                @empty

                    <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                        <div class="single-col wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s"
                             data-wow-offset="0"
                             style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeIn;">
                            <div class="image">
                                <img src="assets/img/our-services/WebDesign.png" alt="web design">
                            </div>
                            <h2 class="service-name">Web Design</h2>
                            <p class="service-description"> we are professionally designing and
                                developing an innovative-experience to deliver your services to
                                your audience through your e-
                                platform
                            </p>
                            <a href="#" class="more-details">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15.698" height="10.216"
                                     viewBox="0 0 19.698 13.216">
                                    <path id="Path_6877" data-name="Path 6877"
                                          d="M220.912,200.437h13.814l-3.083,3.021a1.322,1.322,0,1,0,1.85,1.888l5.4-5.287h0a1.312,1.312,0,0,0,0-1.887h0l-5.4-5.287a1.322,1.322,0,1,0-1.849,1.888l3.083,3.021H220.912a1.322,1.322,0,0,0,0,2.643Z"
                                          transform="translate(-219.59 -192.507)" fill="#fff" />
                                </svg>

                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                        <div class="single-col wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s"
                             data-wow-offset="0"
                             style="visibility: visible; animation-duration: 2s; animation-delay: 0.4s; animation-name: fadeIn;">
                            <div class="image">
                                <img src="assets/img/our-services/webHosting.png" alt="web design">
                            </div>
                            <h2 class="service-name">Web Hosting</h2>
                            <p class="service-description"> we are professionally designing and
                                developing an innovative-experience to deliver your services to
                                your audience through your e-
                                platform
                            </p>
                            <a href="#" class="more-details">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15.698" height="10.216"
                                     viewBox="0 0 19.698 13.216">
                                    <path id="Path_6877" data-name="Path 6877"
                                          d="M220.912,200.437h13.814l-3.083,3.021a1.322,1.322,0,1,0,1.85,1.888l5.4-5.287h0a1.312,1.312,0,0,0,0-1.887h0l-5.4-5.287a1.322,1.322,0,1,0-1.849,1.888l3.083,3.021H220.912a1.322,1.322,0,0,0,0,2.643Z"
                                          transform="translate(-219.59 -192.507)" fill="#fff" />
                                </svg>

                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                        <div class="single-col wow fadeIn" data-wow-duration="3s" data-wow-delay="0.6s"
                             data-wow-offset="0"
                             style="visibility: visible; animation-duration: 3s; animation-delay: 0.6s; animation-name: fadeIn;">
                            <div class="image">
                                <img src="assets/img/our-services/AppDevelopment.png" alt="web design">
                            </div>
                            <h2 class="service-name">App Development</h2>
                            <p class="service-description"> we are professionally designing and
                                developing an innovative-experience to deliver your services to
                                your audience through your e-
                                platform
                            </p>
                            <a href="#" class="more-details">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15.698" height="10.216"
                                     viewBox="0 0 19.698 13.216">
                                    <path id="Path_6877" data-name="Path 6877"
                                          d="M220.912,200.437h13.814l-3.083,3.021a1.322,1.322,0,1,0,1.85,1.888l5.4-5.287h0a1.312,1.312,0,0,0,0-1.887h0l-5.4-5.287a1.322,1.322,0,1,0-1.849,1.888l3.083,3.021H220.912a1.322,1.322,0,0,0,0,2.643Z"
                                          transform="translate(-219.59 -192.507)" fill="#fff" />
                                </svg>

                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                        <div class="single-col wow fadeIn" data-wow-duration="4s" data-wow-delay="0.8s"
                             data-wow-offset="0"
                             style="visibility: visible; animation-duration: 4s; animation-delay: 0.8s; animation-name: fadeIn;">
                            <div class="image">
                                <img src="assets/img/our-services/design.png" alt="web design">
                            </div>
                            <h2 class="service-name">Business Identity</h2>
                            <p class="service-description"> we are professionally designing and
                                developing an innovative-experience to deliver your services to
                                your audience through your e-
                                platform
                            </p>
                            <a href="#" class="more-details">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15.698" height="10.216"
                                     viewBox="0 0 19.698 13.216">
                                    <path id="Path_6877" data-name="Path 6877"
                                          d="M220.912,200.437h13.814l-3.083,3.021a1.322,1.322,0,1,0,1.85,1.888l5.4-5.287h0a1.312,1.312,0,0,0,0-1.887h0l-5.4-5.287a1.322,1.322,0,1,0-1.849,1.888l3.083,3.021H220.912a1.322,1.322,0,0,0,0,2.643Z"
                                          transform="translate(-219.59 -192.507)" fill="#fff" />
                                </svg>

                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                        <div class="single-col wow fadeIn" data-wow-duration="5s" data-wow-delay="1s"
                             data-wow-offset="0"
                             style="visibility: visible; animation-duration: 5s; animation-delay: 1s; animation-name: fadeIn;">
                            <div class="image">
                                <img src="assets/img/our-services/website.png" alt="web design">
                            </div>
                            <h2 class="service-name">E-Commerce</h2>
                            <p class="service-description"> we are professionally designing and
                                developing an innovative-experience to deliver your services to
                                your audience through your e-
                                platform
                            </p>
                            <a href="#" class="more-details">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15.698" height="10.216"
                                     viewBox="0 0 19.698 13.216">
                                    <path id="Path_6877" data-name="Path 6877"
                                          d="M220.912,200.437h13.814l-3.083,3.021a1.322,1.322,0,1,0,1.85,1.888l5.4-5.287h0a1.312,1.312,0,0,0,0-1.887h0l-5.4-5.287a1.322,1.322,0,1,0-1.849,1.888l3.083,3.021H220.912a1.322,1.322,0,0,0,0,2.643Z"
                                          transform="translate(-219.59 -192.507)" fill="#fff" />
                                </svg>

                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                        <div class="single-col wow fadeIn" data-wow-duration="6s" data-wow-delay="1.2s"
                             data-wow-offset="0"
                             style="visibility: visible; animation-duration: 6s; animation-delay: 1.2s; animation-name: fadeIn;">
                            <div class="image">
                                <img src="assets/img/our-services/backendwebsite.png" alt="web design">
                            </div>
                            <h2 class="service-name">Technical Support</h2>
                            <p class="service-description"> we are professionally designing and
                                developing an innovative-experience to deliver your services to
                                your audience through your e-
                                platform
                            </p>
                            <a href="#" class="more-details">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15.698" height="10.216"
                                     viewBox="0 0 19.698 13.216">
                                    <path id="Path_6877" data-name="Path 6877"
                                          d="M220.912,200.437h13.814l-3.083,3.021a1.322,1.322,0,1,0,1.85,1.888l5.4-5.287h0a1.312,1.312,0,0,0,0-1.887h0l-5.4-5.287a1.322,1.322,0,1,0-1.849,1.888l3.083,3.021H220.912a1.322,1.322,0,0,0,0,2.643Z"
                                          transform="translate(-219.59 -192.507)" fill="#fff" />
                                </svg>

                            </a>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</section>
<!--End Our Services-->
