<!-- START HOME -->
<section id="home" class="atf-home2-area atf-align-items-details">

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            @forelse ($sliders as $slider)
                <li data-target="#carouselExampleIndicators" data-slide-to="{{$slider->id}}" @if($loop->first) class="active" @endif></li>
            @empty
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            @endforelse
        </ol>
        <div class="carousel-inner">


            @forelse ($sliders as $slider)
                <div class="carousel-item @if($loop->first)  active @endif">
                    <img src="{{$slider->image->getUrl()}}" alt="{{$slider->title}}">
                    <div class="carousel-caption d-none d-md-block">
                        <div class="row">
                            <div class="col-7">
                                <h5>{{$slider->title}}</h5>
                                <p>{{$slider->short_description}}</p>
                                <div class="home-buttuns">
                                    <div class="atf-main-btn atf-main-btn2 mt-3">
                                        <a href="#"
                                           class="page-scroll atf-themes-btn mr-4"><span></span><span></span><span></span><span></span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20s"
                                                 viewBox="0 0 26.67 26.67">
                                                <g id="Iconly_Light-Outline_Discovery"
                                                   data-name="Iconly/Light-Outline/Discovery"
                                                   transform="translate(-2 -2)">
                                                    <g id="Discovery" transform="translate(2 2)">
                                                        <path id="Combined-Shape"
                                                              d="M13.335,0A13.335,13.335,0,1,1,0,13.335,13.35,13.35,0,0,1,13.335,0Zm0,1.931a11.4,11.4,0,1,0,11.4,11.4A11.418,11.418,0,0,0,13.335,1.931Zm4.983,6.422a.965.965,0,0,1,.238.97l-2.049,6.55a.964.964,0,0,1-.633.633l-6.55,2.05a.964.964,0,0,1-1.21-1.209l2.05-6.55a.96.96,0,0,1,.632-.633l6.55-2.05A.963.963,0,0,1,18.318,8.353Zm-2.155,2.155-4.308,1.349-1.348,4.308,4.306-1.349Z"
                                                              transform="translate(0 0)" fill="#fff"
                                                              fill-rule="evenodd" />
                                                    </g>
                                                </g>
                                            </svg>

                                            @lang('web.discover_more')
                                            <i class="fa fa-angle-right ml-2"></i></a>
                                    </div>
                                    <div class="atf-main-btn atf-main-btn2 mt-3">
                                        <a href="#"
                                           class="page-scroll atf-themes-btn freeConsulting mr-4"><span></span><span></span><span></span><span></span>Start
                                            FREE Consulting<i class="fa fa-angle-right ml-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="carousel-item active">
                    <img src="assets/img/slider/1.png" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <div class="row">
                            <div class="col-7">
                                <h5>Worlds Of Technical Solution To
                                    Realize Your Vision.</h5>
                                <p>We assign you a manager for your technical project </p>
                                <div class="home-buttuns">
                                    <div class="atf-main-btn atf-main-btn2 mt-3">
                                        <a href="#"
                                           class="page-scroll atf-themes-btn mr-4"><span></span><span></span><span></span><span></span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20s"
                                                 viewBox="0 0 26.67 26.67">
                                                <g id="Iconly_Light-Outline_Discovery"
                                                   data-name="Iconly/Light-Outline/Discovery"
                                                   transform="translate(-2 -2)">
                                                    <g id="Discovery" transform="translate(2 2)">
                                                        <path id="Combined-Shape"
                                                              d="M13.335,0A13.335,13.335,0,1,1,0,13.335,13.35,13.35,0,0,1,13.335,0Zm0,1.931a11.4,11.4,0,1,0,11.4,11.4A11.418,11.418,0,0,0,13.335,1.931Zm4.983,6.422a.965.965,0,0,1,.238.97l-2.049,6.55a.964.964,0,0,1-.633.633l-6.55,2.05a.964.964,0,0,1-1.21-1.209l2.05-6.55a.96.96,0,0,1,.632-.633l6.55-2.05A.963.963,0,0,1,18.318,8.353Zm-2.155,2.155-4.308,1.349-1.348,4.308,4.306-1.349Z"
                                                              transform="translate(0 0)" fill="#fff"
                                                              fill-rule="evenodd" />
                                                    </g>
                                                </g>
                                            </svg>

                                            Discover more
                                            <i class="fa fa-angle-right ml-2"></i></a>
                                    </div>
                                    <div class="atf-main-btn atf-main-btn2 mt-3">
                                        <a href="#"
                                           class="page-scroll atf-themes-btn freeConsulting mr-4"><span></span><span></span><span></span><span></span>Start
                                            FREE Consulting<i class="fa fa-angle-right ml-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item ">
                    <img src="assets/img/slider/1.png" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <div class="row">
                            <div class="col-7">
                                <h5>Worlds Of Technical Solution To
                                    Realize Your Vision.</h5>
                                <p>We assign you a manager for your technical project </p>
                                <div class="home-buttuns">
                                    <div class="atf-main-btn atf-main-btn2 mt-3">
                                        <a href=""
                                           class="page-scroll atf-themes-btn mr-4"><span></span><span></span><span></span><span></span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20s"
                                                 viewBox="0 0 26.67 26.67">
                                                <g id="Iconly_Light-Outline_Discovery"
                                                   data-name="Iconly/Light-Outline/Discovery"
                                                   transform="translate(-2 -2)">
                                                    <g id="Discovery" transform="translate(2 2)">
                                                        <path id="Combined-Shape"
                                                              d="M13.335,0A13.335,13.335,0,1,1,0,13.335,13.35,13.35,0,0,1,13.335,0Zm0,1.931a11.4,11.4,0,1,0,11.4,11.4A11.418,11.418,0,0,0,13.335,1.931Zm4.983,6.422a.965.965,0,0,1,.238.97l-2.049,6.55a.964.964,0,0,1-.633.633l-6.55,2.05a.964.964,0,0,1-1.21-1.209l2.05-6.55a.96.96,0,0,1,.632-.633l6.55-2.05A.963.963,0,0,1,18.318,8.353Zm-2.155,2.155-4.308,1.349-1.348,4.308,4.306-1.349Z"
                                                              transform="translate(0 0)" fill="#fff"
                                                              fill-rule="evenodd" />
                                                    </g>
                                                </g>
                                            </svg>

                                            Discover more <i class="fa fa-angle-right ml-2"></i></a>
                                    </div>
                                    <div class="atf-main-btn atf-main-btn2 mt-3">
                                        <a href=""
                                           class="page-scroll atf-themes-btn freeConsulting mr-4"><span></span><span></span><span></span><span></span>Start
                                            FREE Consulting <i class="fa fa-angle-right ml-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item ">
                    <img src="assets/img/slider/1.png" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <div class="row">
                            <div class="col-7">
                                <h5>Worlds Of Technical Solution To
                                    Realize Your Vision.</h5>
                                <p>We assign you a manager for your technical project </p>
                                <div class="home-buttuns">
                                    <div class="atf-main-btn atf-main-btn2 mt-3">
                                        <a href="#"
                                           class="page-scroll atf-themes-btn mr-4"><span></span><span></span><span></span><span></span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20s"
                                                 viewBox="0 0 26.67 26.67">
                                                <g id="Iconly_Light-Outline_Discovery"
                                                   data-name="Iconly/Light-Outline/Discovery"
                                                   transform="translate(-2 -2)">
                                                    <g id="Discovery" transform="translate(2 2)">
                                                        <path id="Combined-Shape"
                                                              d="M13.335,0A13.335,13.335,0,1,1,0,13.335,13.35,13.35,0,0,1,13.335,0Zm0,1.931a11.4,11.4,0,1,0,11.4,11.4A11.418,11.418,0,0,0,13.335,1.931Zm4.983,6.422a.965.965,0,0,1,.238.97l-2.049,6.55a.964.964,0,0,1-.633.633l-6.55,2.05a.964.964,0,0,1-1.21-1.209l2.05-6.55a.96.96,0,0,1,.632-.633l6.55-2.05A.963.963,0,0,1,18.318,8.353Zm-2.155,2.155-4.308,1.349-1.348,4.308,4.306-1.349Z"
                                                              transform="translate(0 0)" fill="#fff"
                                                              fill-rule="evenodd" />
                                                    </g>
                                                </g>
                                            </svg>

                                            Discover more <i class="fa fa-angle-right ml-2"></i></a>
                                    </div>
                                    <div class="atf-main-btn atf-main-btn2 mt-3">
                                        <a href="#"
                                           class="page-scroll atf-themes-btn freeConsulting mr-4"><span></span><span></span><span></span><span></span>Start
                                            FREE Consulting <i class="fa fa-angle-right ml-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforelse
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>
<!-- END HOME -->
