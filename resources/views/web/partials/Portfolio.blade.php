<!---------------------------portfolio start------------------------------------->
<section id="portfolio" class="atf-feature-area atf-section-padding">
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
        <!------------------------------------Tabs----------------------------------------->
        <div class="filter">
            <a class="all current" href="#">@lang('web.show_All')</a>
            @forelse ($categories as $category)
                <a class="{{$category->id}}" href="#">{{$category->title}}</a>
            @empty
                <a class="one" href="#">web</a>
                <a class="two" href="#">Mobile Apps</a>
                <a class="three" href="#">Design</a>
                <a class="four" href="#">Graphic Design& Business Identity</a>
            @endforelse
        </div>
        <div class="boxGroup">
            <div class="row">
                @forelse ($products as $product)
                    <div class="col-6 col-sm-6 col-md-4">
                        <div class="box {{$product->service->id}}">
                            <div class="image">
                                <img src="{{$product->image->geturl()}}" />
                            </div>
                            <h6>{{$product->title}}</h6>
                            <p>{{$product->short_description}}</p>
                        </div>
                    </div>
                @empty
                    <div class="col-6 col-sm-6 col-md-4">
                        <div class="box one">
                            <div class="image">
                                <img src="assets/img/Menu-Matjarko.png">
                            </div>
                            <h6>Menu Matjarko</h6>
                            <p>Website Design</p>
                        </div>
                    </div>
                @endforelse
            </div>

        </div>
        <div class="atf-main-btn atf-main-btn2 mt-3">
            <a href="{{URL(app()->getLocale().'/product')}}"
                class="page-scroll atf-themes-btn mr-4"><span></span><span></span><span></span><span></span>@lang('web.discover_more')<i class="fa fa-angle-right ml-2"></i></a>
        </div>
    </div>
</section>
<!---------------------------portfolio End--------------------------------------->
