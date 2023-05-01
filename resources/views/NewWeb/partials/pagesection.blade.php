<!--START About Us-->
<section id="about-us" class="atf-align-items-details section  about-us-background">
    <div class="atf-section-padding">
        <div class="container">

            <div class="row">
                <div class="col-12 col-sm-12 col-md-5 col-lg-5">
                    <div class="single-col">
                        <div class="about-image">
                            <img src="{{$page->image->getUrl()}}" width="100%" alt="{{$page->title}}">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-7 col-lg-7">
                    <div class="single-col">
                        <div class=" wow fadeInUp" data-wow-duration="3s" data-wow-delay="0.6s"
                             data-wow-offset="0"
                             style="visibility: visible; animation-duration: 3s; animation-delay: 0.6s; animation-name: fadeInUp;">
                            <h2 class="section-title">{{$page->short_description}}
                                <span class="circle"></span>
                            </h2>
                        </div>

                        <p class="section-description">
                            {!! $page->description !!}
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End About Us-->
