<!----------------------------last our works start--------------------------------->
<div id="atf-brand-area1" class="atf-section-padding">
    <div class="atf-brand-overlay">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-xl-6">
                    <div class="atf-section-title text-center wow fadeInUp" data-wow-duration="1s"
                        data-wow-delay="0.3s" data-wow-offset="0"
                        style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s;">

                        <h2 class="">{{$section->title}}</h2>
                        <h5 class="atf-sheading">{!!$section->description!!}</h5>
                        <div class="atf-sec_icon my-3"><span></span><span
                                class="atf-sec_radius"></span><span></span></div>
                    </div>
                </div>
                <!--- END COL -->
            </div>
            <div class="row clearfix">

                <div class="col-md-12 col-lg-12">
                    <div class="atf-brand-active owl-carousel">
                        @foreach($latestproducts->chunk(3) as $three)
                        @foreach($three as $product)
                        <img src="{{$product->image->getUrl()}}" alt="image">
                        @endforeach
                        @endforeach
                        
                    </div>
                </div><!-- END COL  -->
            </div><!--END  ROW  -->
        </div><!-- END CONTAINER  -->
    </div><!-- END OVERLAY -->
</div>
<!----------------------------last our works End--------------------------------->

