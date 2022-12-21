<!---------------------------About Us Start-------------------------------------->
<section id="abou-company" class="atf-feature-area atf-section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-xl-6">
                <div class="atf-section-title text-center wow fadeInUp" data-wow-duration="1s"
                    data-wow-delay="0.3s" data-wow-offset="0"
                    style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s;">
                    <h2 class="">{{$section->title}}</h2>
                    <div class="atf-sec_icon my-3"><span></span><span
                            class="atf-sec_radius"></span><span></span></div>
                </div>
            </div>
            <!--- END COL -->
        </div>
        <div class="about-content">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-5 col-lg-6">
                    <div class="about-image">
                        <img src="{{$section->image->geturl()}}">
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-7 col-lg-6">
                    <div class="about-text">
                        <h2>{!!$section->shortdescription!!}</h2>
                        {{-- <h6>For Technical Services</h6> --}}
                        <p>{!!$section->description!!}</p>
                        <br><br><br>
                        <div class="atf-main-btn atf-main-btn2 mt-3">
                            {{-- <a href="https://www.templatemonster.com/landing-page-template/al-mujib-multipurpose-busniess-amp-consulting-agency-landing-page-template-145313.html"
                                class="page-scroll atf-themes-btn mr-4"><span></span><span></span><span></span><span></span>
                                @lang('web.Learn_More')<i class="fa fa-angle-right ml-2"></i></a> --}}
                        </div>
                    </div>
                </div>
            </div>

            <div class="about-us">
                <div class="row">
                    @forelse ($our_missions as $our_mission)
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                        <div id="blue{{$our_mission->id}}" class="single-col atf-single-feature wow fadeIn" data-wow-duration="1s"
                            data-wow-delay="0.2s" data-wow-offset="0"
                            style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeIn;">
                            <h5>{{$our_mission->order}} </h5>
                            <h4>{{$our_mission->title}}</h4>
                            <p>{!!$our_mission->description!!}</p>
                        </div>
                    </div>
                        
                    @empty
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                        <div id="blue1" class="single-col atf-single-feature wow fadeIn" data-wow-duration="1s"
                            data-wow-delay="0.2s" data-wow-offset="0"
                            style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeIn;">
                            <h5>01 </h5>
                            <h4>Our Goal</h4>
                            <p>Reaching the satisfaction of our customers is the goal we seek, and to ensure a
                                unique experience to meet their needs by providing distinguished services with
                                high technology.</p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                        <div id="blue2" class="single-col atf-single-feature wow fadeIn" data-wow-duration="2s"
                            data-wow-delay="0.4s" data-wow-offset="0"
                            style="visibility: visible; animation-duration: 2s; animation-delay: 0.4s; animation-name: fadeIn;">
                            <h5>02 </h5>
                            <h4>Our Mission</h4>
                            <p>We at DEVUN strive to become a reliable partner in achieving the needs of our
                                customers and harnessing our expertise to reach their commercial and marketing
                                goals as quickly as possible.</p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                        <div id="blue3" class="single-col atf-single-feature wow fadeIn" data-wow-duration="3s"
                            data-wow-delay="0.6s" data-wow-offset="0"
                            style="visibility: visible; animation-duration: 3s; animation-delay: 0.6s; animation-name: fadeIn;">
                            <h5>03 </h5>
                            <h4>Our Vision</h4>
                            <p>Deliver the best possible reliable software solutions to help our clients improve
                                IT efficiency and business profitability.</p>
                        </div>
                    </div>
                        
                    @endforelse
                 
                </div>
            </div>
        </div>
    </div>

</section>
<!---------------------------About Us End---------------------------------------->