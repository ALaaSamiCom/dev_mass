<section>
    <div class="container position-relative my-5">
        <img src="{{asset('newweb_assets')}}/images/services.svg"
             class="position-absolute top-0 start-0 translate-middle pb-5 z-index">
        <div class="position-absolute z-index top-0 end-0">
            <svg xmlns="http://www.w3.org/2000/svg" width="68.93" height="69.325" viewBox="0 0 68.93 69.325">
                <path id="Polygon_2" data-name="Polygon 2"
                      d="M22.863,4.86a3,3,0,0,1,5.274,0L48.6,42.569A3,3,0,0,1,45.959,47H5.041A3,3,0,0,1,2.4,42.569Z"
                      transform="translate(35.471) rotate(49)" fill="#246196" opacity="0.26"/>
            </svg>
        </div>
        <div class="d-none d-xl-block position-absolute top-50 z-index" style="left: -7%;">
            <img src="{{asset('newweb_assets')}}/images/line-z.svg" class="img-fluid px-5"/>
        </div>
        <div class="row Projects-list">
            <h3 class="fw-bold text-center" data-aos="zoom-in-down" data-aos-easing="linear">@lang('web.FEW_SELECTED') <span
                    class="text-primary">@lang('web.PROJECTS')</span></h3>
            <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist" data-aos="zoom-in-up">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-All-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-All" type="button" role="tab" aria-controls="pills-All"
                            aria-selected="true">@lang('web.SHOW_ALL')
                    </button>
                </li>

                @forelse($services as $service)

                    <li class="nav-item" role="presentation">
                        <button class="nav-link filters" id="pills-{{$service->id}}-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-{{$service->id}}"
                                type="button" role="tab" aria-controls="pills-{{$service->id}}"
                                aria-selected="false">{{$service->title}}
                        </button>
                    </li>
                @empty
                @endforelse

            </ul>
            <div class="tab-content Projects" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-All" role="tabpanel"
                     aria-labelledby="pills-All-tab" tabindex="0">
                    <div class="row">

                        @forelse($projects as $project)
                            <div class="col-12 col-lg-4">
                                <div class="card" data-aos="zoom-out-up">
                                    <img src="{{asset('newweb_assets')}}/images/project1.png" class="card-img-top"
                                         alt="Card Image">
                                    <div class="overlay">
                                        <h4 class="fw-bold mb-3">{{$project->title}}</h4>
                                        <p>{{$project->description}}</p>
                                        <p class="d-flex">
                                            <a href="" class="btn btn-white rounded-circle "><i
                                                    class="fa-brands fa-behance"></i></a>
                                            <a href="" class="btn btn-white rounded-circle">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                     fill="currentColor" class="bi bi-globe" viewBox="0 0 16 16">
                                                    <path
                                                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm7.5-6.923c-.67.204-1.335.82-1.887 1.855A7.97 7.97 0 0 0 5.145 4H7.5V1.077zM4.09 4a9.267 9.267 0 0 1 .64-1.539 6.7 6.7 0 0 1 .597-.933A7.025 7.025 0 0 0 2.255 4H4.09zm-.582 3.5c.03-.877.138-1.718.312-2.5H1.674a6.958 6.958 0 0 0-.656 2.5h2.49zM4.847 5a12.5 12.5 0 0 0-.338 2.5H7.5V5H4.847zM8.5 5v2.5h2.99a12.495 12.495 0 0 0-.337-2.5H8.5zM4.51 8.5a12.5 12.5 0 0 0 .337 2.5H7.5V8.5H4.51zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5H8.5zM5.145 12c.138.386.295.744.468 1.068.552 1.035 1.218 1.65 1.887 1.855V12H5.145zm.182 2.472a6.696 6.696 0 0 1-.597-.933A9.268 9.268 0 0 1 4.09 12H2.255a7.024 7.024 0 0 0 3.072 2.472zM3.82 11a13.652 13.652 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5H3.82zm6.853 3.472A7.024 7.024 0 0 0 13.745 12H11.91a9.27 9.27 0 0 1-.64 1.539 6.688 6.688 0 0 1-.597.933zM8.5 12v2.923c.67-.204 1.335-.82 1.887-1.855.173-.324.33-.682.468-1.068H8.5zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.65 13.65 0 0 1-.312 2.5zm2.802-3.5a6.959 6.959 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5h2.49zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7.024 7.024 0 0 0-3.072-2.472c.218.284.418.598.597.933zM10.855 4a7.966 7.966 0 0 0-.468-1.068C9.835 1.897 9.17 1.282 8.5 1.077V4h2.355z"/>
                                                </svg>
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @empty @endforelse
                    </div>
                </div>
                @forelse($services as $service)
                    <div class="tab-pane fade" id="pills-{{$service->id}}" role="tabpanel"
                         aria-labelledby="pills-{{$service->id}}-tab">
                        <div class="row">
                            @forelse($service->projects as $project)
                                <div class="col-12 col-lg-4">
                                    <div class="card" data-aos="zoom-out-up">
                                        <img src="{{asset('newweb_assets')}}/images/project1.png" class="card-img-top"
                                             alt="Card Image">
                                        <div class="overlay">
                                            <h4 class="fw-bold mb-3">{{$project->title}}</h4>
                                            <p>{{$project->description}}</p>
                                            <p class="d-flex">
                                                <a href="" class="btn btn-white rounded-circle "><i
                                                        class="fa-brands fa-behance"></i></a>
                                                <a href="" class="btn btn-white rounded-circle">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                         fill="currentColor" class="bi bi-globe" viewBox="0 0 16 16">
                                                        <path
                                                            d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm7.5-6.923c-.67.204-1.335.82-1.887 1.855A7.97 7.97 0 0 0 5.145 4H7.5V1.077zM4.09 4a9.267 9.267 0 0 1 .64-1.539 6.7 6.7 0 0 1 .597-.933A7.025 7.025 0 0 0 2.255 4H4.09zm-.582 3.5c.03-.877.138-1.718.312-2.5H1.674a6.958 6.958 0 0 0-.656 2.5h2.49zM4.847 5a12.5 12.5 0 0 0-.338 2.5H7.5V5H4.847zM8.5 5v2.5h2.99a12.495 12.495 0 0 0-.337-2.5H8.5zM4.51 8.5a12.5 12.5 0 0 0 .337 2.5H7.5V8.5H4.51zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5H8.5zM5.145 12c.138.386.295.744.468 1.068.552 1.035 1.218 1.65 1.887 1.855V12H5.145zm.182 2.472a6.696 6.696 0 0 1-.597-.933A9.268 9.268 0 0 1 4.09 12H2.255a7.024 7.024 0 0 0 3.072 2.472zM3.82 11a13.652 13.652 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5H3.82zm6.853 3.472A7.024 7.024 0 0 0 13.745 12H11.91a9.27 9.27 0 0 1-.64 1.539 6.688 6.688 0 0 1-.597.933zM8.5 12v2.923c.67-.204 1.335-.82 1.887-1.855.173-.324.33-.682.468-1.068H8.5zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.65 13.65 0 0 1-.312 2.5zm2.802-3.5a6.959 6.959 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5h2.49zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7.024 7.024 0 0 0-3.072-2.472c.218.284.418.598.597.933zM10.855 4a7.966 7.966 0 0 0-.468-1.068C9.835 1.897 9.17 1.282 8.5 1.077V4h2.355z"/>
                                                    </svg>
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                            @empty @endforelse

                        </div>
                    </div>
                @empty


                @endforelse
            </div>
        </div>
    </div>
</section>
