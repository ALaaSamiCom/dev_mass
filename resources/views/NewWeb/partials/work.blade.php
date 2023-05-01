<!--START Our portfolio-->
<section id="Portfolio" class="atf-align-items-details section">
    <div class="atf-section-padding">
        <div class="container">
            <div class="section-header  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s"
                 data-wow-offset="0"
                 style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInUp;">
                <h2 class="section-title">{{$section->title}}
                    <span class="circle"></span>
                </h2>
                <p class="section-description">{!!$section->description!!}</p>
            </div>
            <div class="row clearfix">
                <div class="col-md-12 col-lg-12">
                    <div class="Portfolio-owl owl-carousel">
                        @forelse ($works as $work)
                            <div class="Portfoli-example">
                                <img src="{{$work->image->geturl()}}" alt="{{$work->title}}">
                                <div class="overlay">
                                    <div class="example-details">
                                        <div class="row">
                                            <div class="col-8 col-sm-8">
                                                <h6 class="prpject-name">{{$work->title}}</h6>
                                                <span class="service-name">{{$work->description}}</span>
                                            </div>
                                            <div class="col-4 col-sm-4">
                                                <div class="project-links">
                                                    <a class="icon" href="{{$work->url}}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="15"
                                                             height="15" viewBox="0 0 24.113 24.112">
                                                            <path id="globe-Regular_1_"
                                                                  d="M564.668,1092.29a11.977,11.977,0,0,0-9.635-7.92,12.5,12.5,0,0,0-3.453,0,11.972,11.972,0,0,0-9.631,7.91,11.948,11.948,0,0,0,0,8.041,11.977,11.977,0,0,0,9.635,7.92,12.447,12.447,0,0,0,1.726.12,12.257,12.257,0,0,0,1.726-.121,11.972,11.972,0,0,0,9.631-7.91,11.945,11.945,0,0,0,0-8.04Zm-2.28-.619h-3.763a20.147,20.147,0,0,0-1.784-4.919A10.1,10.1,0,0,1,562.388,1091.671Zm1.12,4.636a10,10,0,0,1-.4,2.784h-4.146a18.148,18.148,0,0,0,0-5.564h4.146A10.006,10.006,0,0,1,563.508,1096.306Zm-13.988,2.784a16.773,16.773,0,0,1,0-5.564h7.574a16.806,16.806,0,0,1,0,5.564Zm-6.018,0a9.951,9.951,0,0,1,0-5.564h4.146a18.087,18.087,0,0,0,0,5.564Zm10.854-12.912a18.308,18.308,0,0,1,2.364,5.494h-6.83a18.311,18.311,0,0,1,2.366-5.493,10.493,10.493,0,0,1,1.05-.073A10.147,10.147,0,0,1,554.356,1086.178Zm-4.585.575a20.094,20.094,0,0,0-1.784,4.919h-3.762A10.087,10.087,0,0,1,549.771,1086.753Zm-5.545,14.192h3.762a20.158,20.158,0,0,0,1.783,4.915A10.094,10.094,0,0,1,544.226,1100.945Zm8.03,5.49a18.33,18.33,0,0,1-2.364-5.489h6.828a18.344,18.344,0,0,1-2.363,5.489A10.654,10.654,0,0,1,552.257,1106.435Zm4.585-.575a20.094,20.094,0,0,0,1.783-4.915h3.762A10.092,10.092,0,0,1,556.842,1105.86Z"
                                                                  transform="translate(-541.25 -1084.25)"
                                                                  fill="#222" />
                                                        </svg>

                                                    </a>
                                                    <a class="icon" href="{{$work->url}}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="15"
                                                             height="15" viewBox="0 0 24.113 24.112">
                                                            <path id="globe-Regular_1_"
                                                                  d="M564.668,1092.29a11.977,11.977,0,0,0-9.635-7.92,12.5,12.5,0,0,0-3.453,0,11.972,11.972,0,0,0-9.631,7.91,11.948,11.948,0,0,0,0,8.041,11.977,11.977,0,0,0,9.635,7.92,12.447,12.447,0,0,0,1.726.12,12.257,12.257,0,0,0,1.726-.121,11.972,11.972,0,0,0,9.631-7.91,11.945,11.945,0,0,0,0-8.04Zm-2.28-.619h-3.763a20.147,20.147,0,0,0-1.784-4.919A10.1,10.1,0,0,1,562.388,1091.671Zm1.12,4.636a10,10,0,0,1-.4,2.784h-4.146a18.148,18.148,0,0,0,0-5.564h4.146A10.006,10.006,0,0,1,563.508,1096.306Zm-13.988,2.784a16.773,16.773,0,0,1,0-5.564h7.574a16.806,16.806,0,0,1,0,5.564Zm-6.018,0a9.951,9.951,0,0,1,0-5.564h4.146a18.087,18.087,0,0,0,0,5.564Zm10.854-12.912a18.308,18.308,0,0,1,2.364,5.494h-6.83a18.311,18.311,0,0,1,2.366-5.493,10.493,10.493,0,0,1,1.05-.073A10.147,10.147,0,0,1,554.356,1086.178Zm-4.585.575a20.094,20.094,0,0,0-1.784,4.919h-3.762A10.087,10.087,0,0,1,549.771,1086.753Zm-5.545,14.192h3.762a20.158,20.158,0,0,0,1.783,4.915A10.094,10.094,0,0,1,544.226,1100.945Zm8.03,5.49a18.33,18.33,0,0,1-2.364-5.489h6.828a18.344,18.344,0,0,1-2.363,5.489A10.654,10.654,0,0,1,552.257,1106.435Zm4.585-.575a20.094,20.094,0,0,0,1.783-4.915h3.762A10.092,10.092,0,0,1,556.842,1105.86Z"
                                                                  transform="translate(-541.25 -1084.25)"
                                                                  fill="#222" />
                                                        </svg>

                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="Portfoli-example">
                                <img src="assets/img/portfolio/qalam.png" alt="qalam">
                                <div class="overlay">
                                    <div class="example-details">
                                        <div class="row">
                                            <div class="col-8 col-sm-8">
                                                <h6 class="prpject-name">Qalam Website</h6>
                                                <span class="service-name">Website Design</span>
                                            </div>
                                            <div class="col-4 col-sm-4">
                                                <div class="project-links">
                                                    <a class="icon" href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="15"
                                                             height="15" viewBox="0 0 24.113 24.112">
                                                            <path id="globe-Regular_1_"
                                                                  d="M564.668,1092.29a11.977,11.977,0,0,0-9.635-7.92,12.5,12.5,0,0,0-3.453,0,11.972,11.972,0,0,0-9.631,7.91,11.948,11.948,0,0,0,0,8.041,11.977,11.977,0,0,0,9.635,7.92,12.447,12.447,0,0,0,1.726.12,12.257,12.257,0,0,0,1.726-.121,11.972,11.972,0,0,0,9.631-7.91,11.945,11.945,0,0,0,0-8.04Zm-2.28-.619h-3.763a20.147,20.147,0,0,0-1.784-4.919A10.1,10.1,0,0,1,562.388,1091.671Zm1.12,4.636a10,10,0,0,1-.4,2.784h-4.146a18.148,18.148,0,0,0,0-5.564h4.146A10.006,10.006,0,0,1,563.508,1096.306Zm-13.988,2.784a16.773,16.773,0,0,1,0-5.564h7.574a16.806,16.806,0,0,1,0,5.564Zm-6.018,0a9.951,9.951,0,0,1,0-5.564h4.146a18.087,18.087,0,0,0,0,5.564Zm10.854-12.912a18.308,18.308,0,0,1,2.364,5.494h-6.83a18.311,18.311,0,0,1,2.366-5.493,10.493,10.493,0,0,1,1.05-.073A10.147,10.147,0,0,1,554.356,1086.178Zm-4.585.575a20.094,20.094,0,0,0-1.784,4.919h-3.762A10.087,10.087,0,0,1,549.771,1086.753Zm-5.545,14.192h3.762a20.158,20.158,0,0,0,1.783,4.915A10.094,10.094,0,0,1,544.226,1100.945Zm8.03,5.49a18.33,18.33,0,0,1-2.364-5.489h6.828a18.344,18.344,0,0,1-2.363,5.489A10.654,10.654,0,0,1,552.257,1106.435Zm4.585-.575a20.094,20.094,0,0,0,1.783-4.915h3.762A10.092,10.092,0,0,1,556.842,1105.86Z"
                                                                  transform="translate(-541.25 -1084.25)"
                                                                  fill="#222" />
                                                        </svg>

                                                    </a>
                                                    <a class="icon" href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="15"
                                                             height="15" viewBox="0 0 24.113 24.112">
                                                            <path id="globe-Regular_1_"
                                                                  d="M564.668,1092.29a11.977,11.977,0,0,0-9.635-7.92,12.5,12.5,0,0,0-3.453,0,11.972,11.972,0,0,0-9.631,7.91,11.948,11.948,0,0,0,0,8.041,11.977,11.977,0,0,0,9.635,7.92,12.447,12.447,0,0,0,1.726.12,12.257,12.257,0,0,0,1.726-.121,11.972,11.972,0,0,0,9.631-7.91,11.945,11.945,0,0,0,0-8.04Zm-2.28-.619h-3.763a20.147,20.147,0,0,0-1.784-4.919A10.1,10.1,0,0,1,562.388,1091.671Zm1.12,4.636a10,10,0,0,1-.4,2.784h-4.146a18.148,18.148,0,0,0,0-5.564h4.146A10.006,10.006,0,0,1,563.508,1096.306Zm-13.988,2.784a16.773,16.773,0,0,1,0-5.564h7.574a16.806,16.806,0,0,1,0,5.564Zm-6.018,0a9.951,9.951,0,0,1,0-5.564h4.146a18.087,18.087,0,0,0,0,5.564Zm10.854-12.912a18.308,18.308,0,0,1,2.364,5.494h-6.83a18.311,18.311,0,0,1,2.366-5.493,10.493,10.493,0,0,1,1.05-.073A10.147,10.147,0,0,1,554.356,1086.178Zm-4.585.575a20.094,20.094,0,0,0-1.784,4.919h-3.762A10.087,10.087,0,0,1,549.771,1086.753Zm-5.545,14.192h3.762a20.158,20.158,0,0,0,1.783,4.915A10.094,10.094,0,0,1,544.226,1100.945Zm8.03,5.49a18.33,18.33,0,0,1-2.364-5.489h6.828a18.344,18.344,0,0,1-2.363,5.489A10.654,10.654,0,0,1,552.257,1106.435Zm4.585-.575a20.094,20.094,0,0,0,1.783-4.915h3.762A10.092,10.092,0,0,1,556.842,1105.86Z"
                                                                  transform="translate(-541.25 -1084.25)"
                                                                  fill="#222" />
                                                        </svg>

                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="Portfoli-example">
                                <img src="assets/img/portfolio/qalam.png" alt="qalam">
                                <div class="overlay">
                                    <div class="example-details">
                                        <div class="row">
                                            <div class="col-8 col-sm-8">
                                                <h6 class="prpject-name">Qalam Website</h6>
                                                <span class="service-name">Website Design</span>
                                            </div>
                                            <div class="col-4 col-sm-4">
                                                <div class="project-links">
                                                    <a class="icon" href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="15"
                                                             height="15" viewBox="0 0 24.113 24.112">
                                                            <path id="globe-Regular_1_"
                                                                  d="M564.668,1092.29a11.977,11.977,0,0,0-9.635-7.92,12.5,12.5,0,0,0-3.453,0,11.972,11.972,0,0,0-9.631,7.91,11.948,11.948,0,0,0,0,8.041,11.977,11.977,0,0,0,9.635,7.92,12.447,12.447,0,0,0,1.726.12,12.257,12.257,0,0,0,1.726-.121,11.972,11.972,0,0,0,9.631-7.91,11.945,11.945,0,0,0,0-8.04Zm-2.28-.619h-3.763a20.147,20.147,0,0,0-1.784-4.919A10.1,10.1,0,0,1,562.388,1091.671Zm1.12,4.636a10,10,0,0,1-.4,2.784h-4.146a18.148,18.148,0,0,0,0-5.564h4.146A10.006,10.006,0,0,1,563.508,1096.306Zm-13.988,2.784a16.773,16.773,0,0,1,0-5.564h7.574a16.806,16.806,0,0,1,0,5.564Zm-6.018,0a9.951,9.951,0,0,1,0-5.564h4.146a18.087,18.087,0,0,0,0,5.564Zm10.854-12.912a18.308,18.308,0,0,1,2.364,5.494h-6.83a18.311,18.311,0,0,1,2.366-5.493,10.493,10.493,0,0,1,1.05-.073A10.147,10.147,0,0,1,554.356,1086.178Zm-4.585.575a20.094,20.094,0,0,0-1.784,4.919h-3.762A10.087,10.087,0,0,1,549.771,1086.753Zm-5.545,14.192h3.762a20.158,20.158,0,0,0,1.783,4.915A10.094,10.094,0,0,1,544.226,1100.945Zm8.03,5.49a18.33,18.33,0,0,1-2.364-5.489h6.828a18.344,18.344,0,0,1-2.363,5.489A10.654,10.654,0,0,1,552.257,1106.435Zm4.585-.575a20.094,20.094,0,0,0,1.783-4.915h3.762A10.092,10.092,0,0,1,556.842,1105.86Z"
                                                                  transform="translate(-541.25 -1084.25)"
                                                                  fill="#222" />
                                                        </svg>

                                                    </a>
                                                    <a class="icon" href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="15"
                                                             height="15" viewBox="0 0 24.113 24.112">
                                                            <path id="globe-Regular_1_"
                                                                  d="M564.668,1092.29a11.977,11.977,0,0,0-9.635-7.92,12.5,12.5,0,0,0-3.453,0,11.972,11.972,0,0,0-9.631,7.91,11.948,11.948,0,0,0,0,8.041,11.977,11.977,0,0,0,9.635,7.92,12.447,12.447,0,0,0,1.726.12,12.257,12.257,0,0,0,1.726-.121,11.972,11.972,0,0,0,9.631-7.91,11.945,11.945,0,0,0,0-8.04Zm-2.28-.619h-3.763a20.147,20.147,0,0,0-1.784-4.919A10.1,10.1,0,0,1,562.388,1091.671Zm1.12,4.636a10,10,0,0,1-.4,2.784h-4.146a18.148,18.148,0,0,0,0-5.564h4.146A10.006,10.006,0,0,1,563.508,1096.306Zm-13.988,2.784a16.773,16.773,0,0,1,0-5.564h7.574a16.806,16.806,0,0,1,0,5.564Zm-6.018,0a9.951,9.951,0,0,1,0-5.564h4.146a18.087,18.087,0,0,0,0,5.564Zm10.854-12.912a18.308,18.308,0,0,1,2.364,5.494h-6.83a18.311,18.311,0,0,1,2.366-5.493,10.493,10.493,0,0,1,1.05-.073A10.147,10.147,0,0,1,554.356,1086.178Zm-4.585.575a20.094,20.094,0,0,0-1.784,4.919h-3.762A10.087,10.087,0,0,1,549.771,1086.753Zm-5.545,14.192h3.762a20.158,20.158,0,0,0,1.783,4.915A10.094,10.094,0,0,1,544.226,1100.945Zm8.03,5.49a18.33,18.33,0,0,1-2.364-5.489h6.828a18.344,18.344,0,0,1-2.363,5.489A10.654,10.654,0,0,1,552.257,1106.435Zm4.585-.575a20.094,20.094,0,0,0,1.783-4.915h3.762A10.092,10.092,0,0,1,556.842,1105.86Z"
                                                                  transform="translate(-541.25 -1084.25)"
                                                                  fill="#222" />
                                                        </svg>

                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="Portfoli-example">
                                <img src="assets/img/portfolio/qalam.png" alt="qalam">
                                <div class="overlay">
                                    <div class="example-details">
                                        <div class="row">
                                            <div class="col-8 col-sm-8">
                                                <h6 class="prpject-name">Qalam Website</h6>
                                                <span class="service-name">Website Design</span>
                                            </div>
                                            <div class="col-4 col-sm-4">
                                                <div class="project-links">
                                                    <a class="icon" href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="15"
                                                             height="15" viewBox="0 0 24.113 24.112">
                                                            <path id="globe-Regular_1_"
                                                                  d="M564.668,1092.29a11.977,11.977,0,0,0-9.635-7.92,12.5,12.5,0,0,0-3.453,0,11.972,11.972,0,0,0-9.631,7.91,11.948,11.948,0,0,0,0,8.041,11.977,11.977,0,0,0,9.635,7.92,12.447,12.447,0,0,0,1.726.12,12.257,12.257,0,0,0,1.726-.121,11.972,11.972,0,0,0,9.631-7.91,11.945,11.945,0,0,0,0-8.04Zm-2.28-.619h-3.763a20.147,20.147,0,0,0-1.784-4.919A10.1,10.1,0,0,1,562.388,1091.671Zm1.12,4.636a10,10,0,0,1-.4,2.784h-4.146a18.148,18.148,0,0,0,0-5.564h4.146A10.006,10.006,0,0,1,563.508,1096.306Zm-13.988,2.784a16.773,16.773,0,0,1,0-5.564h7.574a16.806,16.806,0,0,1,0,5.564Zm-6.018,0a9.951,9.951,0,0,1,0-5.564h4.146a18.087,18.087,0,0,0,0,5.564Zm10.854-12.912a18.308,18.308,0,0,1,2.364,5.494h-6.83a18.311,18.311,0,0,1,2.366-5.493,10.493,10.493,0,0,1,1.05-.073A10.147,10.147,0,0,1,554.356,1086.178Zm-4.585.575a20.094,20.094,0,0,0-1.784,4.919h-3.762A10.087,10.087,0,0,1,549.771,1086.753Zm-5.545,14.192h3.762a20.158,20.158,0,0,0,1.783,4.915A10.094,10.094,0,0,1,544.226,1100.945Zm8.03,5.49a18.33,18.33,0,0,1-2.364-5.489h6.828a18.344,18.344,0,0,1-2.363,5.489A10.654,10.654,0,0,1,552.257,1106.435Zm4.585-.575a20.094,20.094,0,0,0,1.783-4.915h3.762A10.092,10.092,0,0,1,556.842,1105.86Z"
                                                                  transform="translate(-541.25 -1084.25)"
                                                                  fill="#222" />
                                                        </svg>

                                                    </a>
                                                    <a class="icon" href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="15"
                                                             height="15" viewBox="0 0 24.113 24.112">
                                                            <path id="globe-Regular_1_"
                                                                  d="M564.668,1092.29a11.977,11.977,0,0,0-9.635-7.92,12.5,12.5,0,0,0-3.453,0,11.972,11.972,0,0,0-9.631,7.91,11.948,11.948,0,0,0,0,8.041,11.977,11.977,0,0,0,9.635,7.92,12.447,12.447,0,0,0,1.726.12,12.257,12.257,0,0,0,1.726-.121,11.972,11.972,0,0,0,9.631-7.91,11.945,11.945,0,0,0,0-8.04Zm-2.28-.619h-3.763a20.147,20.147,0,0,0-1.784-4.919A10.1,10.1,0,0,1,562.388,1091.671Zm1.12,4.636a10,10,0,0,1-.4,2.784h-4.146a18.148,18.148,0,0,0,0-5.564h4.146A10.006,10.006,0,0,1,563.508,1096.306Zm-13.988,2.784a16.773,16.773,0,0,1,0-5.564h7.574a16.806,16.806,0,0,1,0,5.564Zm-6.018,0a9.951,9.951,0,0,1,0-5.564h4.146a18.087,18.087,0,0,0,0,5.564Zm10.854-12.912a18.308,18.308,0,0,1,2.364,5.494h-6.83a18.311,18.311,0,0,1,2.366-5.493,10.493,10.493,0,0,1,1.05-.073A10.147,10.147,0,0,1,554.356,1086.178Zm-4.585.575a20.094,20.094,0,0,0-1.784,4.919h-3.762A10.087,10.087,0,0,1,549.771,1086.753Zm-5.545,14.192h3.762a20.158,20.158,0,0,0,1.783,4.915A10.094,10.094,0,0,1,544.226,1100.945Zm8.03,5.49a18.33,18.33,0,0,1-2.364-5.489h6.828a18.344,18.344,0,0,1-2.363,5.489A10.654,10.654,0,0,1,552.257,1106.435Zm4.585-.575a20.094,20.094,0,0,0,1.783-4.915h3.762A10.092,10.092,0,0,1,556.842,1105.86Z"
                                                                  transform="translate(-541.25 -1084.25)"
                                                                  fill="#222" />
                                                        </svg>

                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="Portfoli-example">
                                <img src="assets/img/portfolio/qalam.png" alt="qalam">
                                <div class="overlay">
                                    <div class="example-details">
                                        <div class="row">
                                            <div class="col-8 col-sm-8">
                                                <h6 class="prpject-name">Qalam Website</h6>
                                                <span class="service-name">Website Design</span>
                                            </div>
                                            <div class="col-4 col-sm-4">
                                                <div class="project-links">
                                                    <a class="icon" href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="15"
                                                             height="15" viewBox="0 0 24.113 24.112">
                                                            <path id="globe-Regular_1_"
                                                                  d="M564.668,1092.29a11.977,11.977,0,0,0-9.635-7.92,12.5,12.5,0,0,0-3.453,0,11.972,11.972,0,0,0-9.631,7.91,11.948,11.948,0,0,0,0,8.041,11.977,11.977,0,0,0,9.635,7.92,12.447,12.447,0,0,0,1.726.12,12.257,12.257,0,0,0,1.726-.121,11.972,11.972,0,0,0,9.631-7.91,11.945,11.945,0,0,0,0-8.04Zm-2.28-.619h-3.763a20.147,20.147,0,0,0-1.784-4.919A10.1,10.1,0,0,1,562.388,1091.671Zm1.12,4.636a10,10,0,0,1-.4,2.784h-4.146a18.148,18.148,0,0,0,0-5.564h4.146A10.006,10.006,0,0,1,563.508,1096.306Zm-13.988,2.784a16.773,16.773,0,0,1,0-5.564h7.574a16.806,16.806,0,0,1,0,5.564Zm-6.018,0a9.951,9.951,0,0,1,0-5.564h4.146a18.087,18.087,0,0,0,0,5.564Zm10.854-12.912a18.308,18.308,0,0,1,2.364,5.494h-6.83a18.311,18.311,0,0,1,2.366-5.493,10.493,10.493,0,0,1,1.05-.073A10.147,10.147,0,0,1,554.356,1086.178Zm-4.585.575a20.094,20.094,0,0,0-1.784,4.919h-3.762A10.087,10.087,0,0,1,549.771,1086.753Zm-5.545,14.192h3.762a20.158,20.158,0,0,0,1.783,4.915A10.094,10.094,0,0,1,544.226,1100.945Zm8.03,5.49a18.33,18.33,0,0,1-2.364-5.489h6.828a18.344,18.344,0,0,1-2.363,5.489A10.654,10.654,0,0,1,552.257,1106.435Zm4.585-.575a20.094,20.094,0,0,0,1.783-4.915h3.762A10.092,10.092,0,0,1,556.842,1105.86Z"
                                                                  transform="translate(-541.25 -1084.25)"
                                                                  fill="#222" />
                                                        </svg>

                                                    </a>
                                                    <a class="icon" href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="15"
                                                             height="15" viewBox="0 0 24.113 24.112">
                                                            <path id="globe-Regular_1_"
                                                                  d="M564.668,1092.29a11.977,11.977,0,0,0-9.635-7.92,12.5,12.5,0,0,0-3.453,0,11.972,11.972,0,0,0-9.631,7.91,11.948,11.948,0,0,0,0,8.041,11.977,11.977,0,0,0,9.635,7.92,12.447,12.447,0,0,0,1.726.12,12.257,12.257,0,0,0,1.726-.121,11.972,11.972,0,0,0,9.631-7.91,11.945,11.945,0,0,0,0-8.04Zm-2.28-.619h-3.763a20.147,20.147,0,0,0-1.784-4.919A10.1,10.1,0,0,1,562.388,1091.671Zm1.12,4.636a10,10,0,0,1-.4,2.784h-4.146a18.148,18.148,0,0,0,0-5.564h4.146A10.006,10.006,0,0,1,563.508,1096.306Zm-13.988,2.784a16.773,16.773,0,0,1,0-5.564h7.574a16.806,16.806,0,0,1,0,5.564Zm-6.018,0a9.951,9.951,0,0,1,0-5.564h4.146a18.087,18.087,0,0,0,0,5.564Zm10.854-12.912a18.308,18.308,0,0,1,2.364,5.494h-6.83a18.311,18.311,0,0,1,2.366-5.493,10.493,10.493,0,0,1,1.05-.073A10.147,10.147,0,0,1,554.356,1086.178Zm-4.585.575a20.094,20.094,0,0,0-1.784,4.919h-3.762A10.087,10.087,0,0,1,549.771,1086.753Zm-5.545,14.192h3.762a20.158,20.158,0,0,0,1.783,4.915A10.094,10.094,0,0,1,544.226,1100.945Zm8.03,5.49a18.33,18.33,0,0,1-2.364-5.489h6.828a18.344,18.344,0,0,1-2.363,5.489A10.654,10.654,0,0,1,552.257,1106.435Zm4.585-.575a20.094,20.094,0,0,0,1.783-4.915h3.762A10.092,10.092,0,0,1,556.842,1105.86Z"
                                                                  transform="translate(-541.25 -1084.25)"
                                                                  fill="#222" />
                                                        </svg>

                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="Portfoli-example">
                                <img src="assets/img/portfolio/qalam.png" alt="qalam">
                                <div class="overlay">
                                    <div class="example-details">
                                        <div class="row">
                                            <div class="col-8 col-sm-8">
                                                <h6 class="prpject-name">Qalam Website</h6>
                                                <span class="service-name">Website Design</span>
                                            </div>
                                            <div class="col-4 col-sm-4">
                                                <div class="project-links">
                                                    <a class="icon" href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="15"
                                                             height="15" viewBox="0 0 24.113 24.112">
                                                            <path id="globe-Regular_1_"
                                                                  d="M564.668,1092.29a11.977,11.977,0,0,0-9.635-7.92,12.5,12.5,0,0,0-3.453,0,11.972,11.972,0,0,0-9.631,7.91,11.948,11.948,0,0,0,0,8.041,11.977,11.977,0,0,0,9.635,7.92,12.447,12.447,0,0,0,1.726.12,12.257,12.257,0,0,0,1.726-.121,11.972,11.972,0,0,0,9.631-7.91,11.945,11.945,0,0,0,0-8.04Zm-2.28-.619h-3.763a20.147,20.147,0,0,0-1.784-4.919A10.1,10.1,0,0,1,562.388,1091.671Zm1.12,4.636a10,10,0,0,1-.4,2.784h-4.146a18.148,18.148,0,0,0,0-5.564h4.146A10.006,10.006,0,0,1,563.508,1096.306Zm-13.988,2.784a16.773,16.773,0,0,1,0-5.564h7.574a16.806,16.806,0,0,1,0,5.564Zm-6.018,0a9.951,9.951,0,0,1,0-5.564h4.146a18.087,18.087,0,0,0,0,5.564Zm10.854-12.912a18.308,18.308,0,0,1,2.364,5.494h-6.83a18.311,18.311,0,0,1,2.366-5.493,10.493,10.493,0,0,1,1.05-.073A10.147,10.147,0,0,1,554.356,1086.178Zm-4.585.575a20.094,20.094,0,0,0-1.784,4.919h-3.762A10.087,10.087,0,0,1,549.771,1086.753Zm-5.545,14.192h3.762a20.158,20.158,0,0,0,1.783,4.915A10.094,10.094,0,0,1,544.226,1100.945Zm8.03,5.49a18.33,18.33,0,0,1-2.364-5.489h6.828a18.344,18.344,0,0,1-2.363,5.489A10.654,10.654,0,0,1,552.257,1106.435Zm4.585-.575a20.094,20.094,0,0,0,1.783-4.915h3.762A10.092,10.092,0,0,1,556.842,1105.86Z"
                                                                  transform="translate(-541.25 -1084.25)"
                                                                  fill="#222" />
                                                        </svg>

                                                    </a>
                                                    <a class="icon" href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="15"
                                                             height="15" viewBox="0 0 24.113 24.112">
                                                            <path id="globe-Regular_1_"
                                                                  d="M564.668,1092.29a11.977,11.977,0,0,0-9.635-7.92,12.5,12.5,0,0,0-3.453,0,11.972,11.972,0,0,0-9.631,7.91,11.948,11.948,0,0,0,0,8.041,11.977,11.977,0,0,0,9.635,7.92,12.447,12.447,0,0,0,1.726.12,12.257,12.257,0,0,0,1.726-.121,11.972,11.972,0,0,0,9.631-7.91,11.945,11.945,0,0,0,0-8.04Zm-2.28-.619h-3.763a20.147,20.147,0,0,0-1.784-4.919A10.1,10.1,0,0,1,562.388,1091.671Zm1.12,4.636a10,10,0,0,1-.4,2.784h-4.146a18.148,18.148,0,0,0,0-5.564h4.146A10.006,10.006,0,0,1,563.508,1096.306Zm-13.988,2.784a16.773,16.773,0,0,1,0-5.564h7.574a16.806,16.806,0,0,1,0,5.564Zm-6.018,0a9.951,9.951,0,0,1,0-5.564h4.146a18.087,18.087,0,0,0,0,5.564Zm10.854-12.912a18.308,18.308,0,0,1,2.364,5.494h-6.83a18.311,18.311,0,0,1,2.366-5.493,10.493,10.493,0,0,1,1.05-.073A10.147,10.147,0,0,1,554.356,1086.178Zm-4.585.575a20.094,20.094,0,0,0-1.784,4.919h-3.762A10.087,10.087,0,0,1,549.771,1086.753Zm-5.545,14.192h3.762a20.158,20.158,0,0,0,1.783,4.915A10.094,10.094,0,0,1,544.226,1100.945Zm8.03,5.49a18.33,18.33,0,0,1-2.364-5.489h6.828a18.344,18.344,0,0,1-2.363,5.489A10.654,10.654,0,0,1,552.257,1106.435Zm4.585-.575a20.094,20.094,0,0,0,1.783-4.915h3.762A10.092,10.092,0,0,1,556.842,1105.86Z"
                                                                  transform="translate(-541.25 -1084.25)"
                                                                  fill="#222" />
                                                        </svg>

                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="Portfoli-example">
                                <img src="assets/img/portfolio/qalam.png" alt="qalam">
                                <div class="overlay">
                                    <div class="example-details">
                                        <div class="row">
                                            <div class="col-8 col-sm-8">
                                                <h6 class="prpject-name">Qalam Website</h6>
                                                <span class="service-name">Website Design</span>
                                            </div>
                                            <div class="col-4 col-sm-4">
                                                <div class="project-links">
                                                    <a class="icon" href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="15"
                                                             height="15" viewBox="0 0 24.113 24.112">
                                                            <path id="globe-Regular_1_"
                                                                  d="M564.668,1092.29a11.977,11.977,0,0,0-9.635-7.92,12.5,12.5,0,0,0-3.453,0,11.972,11.972,0,0,0-9.631,7.91,11.948,11.948,0,0,0,0,8.041,11.977,11.977,0,0,0,9.635,7.92,12.447,12.447,0,0,0,1.726.12,12.257,12.257,0,0,0,1.726-.121,11.972,11.972,0,0,0,9.631-7.91,11.945,11.945,0,0,0,0-8.04Zm-2.28-.619h-3.763a20.147,20.147,0,0,0-1.784-4.919A10.1,10.1,0,0,1,562.388,1091.671Zm1.12,4.636a10,10,0,0,1-.4,2.784h-4.146a18.148,18.148,0,0,0,0-5.564h4.146A10.006,10.006,0,0,1,563.508,1096.306Zm-13.988,2.784a16.773,16.773,0,0,1,0-5.564h7.574a16.806,16.806,0,0,1,0,5.564Zm-6.018,0a9.951,9.951,0,0,1,0-5.564h4.146a18.087,18.087,0,0,0,0,5.564Zm10.854-12.912a18.308,18.308,0,0,1,2.364,5.494h-6.83a18.311,18.311,0,0,1,2.366-5.493,10.493,10.493,0,0,1,1.05-.073A10.147,10.147,0,0,1,554.356,1086.178Zm-4.585.575a20.094,20.094,0,0,0-1.784,4.919h-3.762A10.087,10.087,0,0,1,549.771,1086.753Zm-5.545,14.192h3.762a20.158,20.158,0,0,0,1.783,4.915A10.094,10.094,0,0,1,544.226,1100.945Zm8.03,5.49a18.33,18.33,0,0,1-2.364-5.489h6.828a18.344,18.344,0,0,1-2.363,5.489A10.654,10.654,0,0,1,552.257,1106.435Zm4.585-.575a20.094,20.094,0,0,0,1.783-4.915h3.762A10.092,10.092,0,0,1,556.842,1105.86Z"
                                                                  transform="translate(-541.25 -1084.25)"
                                                                  fill="#222" />
                                                        </svg>

                                                    </a>
                                                    <a class="icon" href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="15"
                                                             height="15" viewBox="0 0 24.113 24.112">
                                                            <path id="globe-Regular_1_"
                                                                  d="M564.668,1092.29a11.977,11.977,0,0,0-9.635-7.92,12.5,12.5,0,0,0-3.453,0,11.972,11.972,0,0,0-9.631,7.91,11.948,11.948,0,0,0,0,8.041,11.977,11.977,0,0,0,9.635,7.92,12.447,12.447,0,0,0,1.726.12,12.257,12.257,0,0,0,1.726-.121,11.972,11.972,0,0,0,9.631-7.91,11.945,11.945,0,0,0,0-8.04Zm-2.28-.619h-3.763a20.147,20.147,0,0,0-1.784-4.919A10.1,10.1,0,0,1,562.388,1091.671Zm1.12,4.636a10,10,0,0,1-.4,2.784h-4.146a18.148,18.148,0,0,0,0-5.564h4.146A10.006,10.006,0,0,1,563.508,1096.306Zm-13.988,2.784a16.773,16.773,0,0,1,0-5.564h7.574a16.806,16.806,0,0,1,0,5.564Zm-6.018,0a9.951,9.951,0,0,1,0-5.564h4.146a18.087,18.087,0,0,0,0,5.564Zm10.854-12.912a18.308,18.308,0,0,1,2.364,5.494h-6.83a18.311,18.311,0,0,1,2.366-5.493,10.493,10.493,0,0,1,1.05-.073A10.147,10.147,0,0,1,554.356,1086.178Zm-4.585.575a20.094,20.094,0,0,0-1.784,4.919h-3.762A10.087,10.087,0,0,1,549.771,1086.753Zm-5.545,14.192h3.762a20.158,20.158,0,0,0,1.783,4.915A10.094,10.094,0,0,1,544.226,1100.945Zm8.03,5.49a18.33,18.33,0,0,1-2.364-5.489h6.828a18.344,18.344,0,0,1-2.363,5.489A10.654,10.654,0,0,1,552.257,1106.435Zm4.585-.575a20.094,20.094,0,0,0,1.783-4.915h3.762A10.092,10.092,0,0,1,556.842,1105.86Z"
                                                                  transform="translate(-541.25 -1084.25)"
                                                                  fill="#222" />
                                                        </svg>

                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforelse
                    </div>
                </div><!-- END COL  -->
            </div>
            <div class="more">
                <a href="{{URL(app()->getLocale().'/product')}}"
                   class="page-scroll atf-themes-btn mr-4 "><span></span><span></span><span></span><span></span>
                    @lang('web.discover_more')
                        <i class="fa fa-angle-right ml-2"></i></a>
            </div>
        </div>
    </div>
</section>
<!--End Our portfolio-->
