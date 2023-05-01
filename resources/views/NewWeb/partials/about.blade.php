<!--START About Us-->
<section id="about-us" class="atf-align-items-details section">
    <div class="atf-section-padding">
        <div class="container">
            <h6 class="main-title">{{$section->title}}</h6>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-5">
                    <div class="single-col">
                        <div class="about-image">
                            <img src="{{$section->image->geturl()}}" width="100%" alt="about us iamge">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-7">
                    <div class="single-col">
                        <div class=" wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s"
                             data-wow-offset="0"
                             style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInUp;">
                            <h2 class="section-title">{!!$section->shortـdescription!!}
                                <span class="circle"></span>
                            </h2>
                        </div>

                        <p class="section-description">
                            {!!$section->description!!}

                        </p>
                        <div class="atf-main-btn atf-main-btn2 mt-3">
                            <a href="#"
                               class="page-scroll atf-themes-btn mr-4 more-about"><span></span><span></span><span></span><span></span>More
                                About Us<i class="fa fa-angle-right ml-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End About Us-->
