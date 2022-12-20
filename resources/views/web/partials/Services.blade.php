<!---------------------------Our Services----------------------------------->
<section id="Services" class="atf-feature-area atf-section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-xl-6">
                <div class="atf-section-title text-center wow fadeInUp" data-wow-duration="1s"
                    data-wow-delay="0.3s" data-wow-offset="0"
                    style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInUp;">
                    <h2 class="">{{$section->title}}</h2>
                    <div class="atf-sec_icon my-3"><span></span><span
                            class="atf-sec_radius"></span><span></span></div>
                </div>
            </div>
            <!--- END COL -->
        </div>
        <!--- END ROW -->

        <div class="row clearfix">
            @forelse ($services as $service)
            <div class="col-lg-4 col-md-6 atf-blog-feature">
                <div class="atf-single-feature wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s"
                    data-wow-offset="0"
                    style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeIn;">
                    <span class="icon">
                        <img src="{{$service->icon->geturl()}}">

                        {{-- <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="81.2" height="81.2" viewBox="0 0 81.2 81.2">
                            <defs>
                                <clipPath id="clip-path">
                                    <rect id="Rectangle_132" data-name="Rectangle 132" width="81.2"
                                        height="81.2" fill="none" />
                                </clipPath>
                            </defs>
                            <g id="Group_446" data-name="Group 446" transform="translate(0 0)">
                                <g id="Group_445" data-name="Group 445" transform="translate(0 0)"
                                    clip-path="url(#clip-path)">
                                    <path id="Path_1358" data-name="Path 1358"
                                        d="M40.6,0A40.6,40.6,0,1,1,0,40.6,40.6,40.6,0,0,1,40.6,0"
                                        transform="translate(0 -0.001)" fill="#e64a19" fill-rule="evenodd" />
                                    <path id="Path_1359" data-name="Path 1359"
                                        d="M8.734,16.769V14.642l9.219-5.194v2.265l-7.311,4.005,7.311,4.041v2.272Zm25.974,0-9.216,5.262V19.759l7.3-4.041-7.3-4.005V9.448l9.216,5.194Z"
                                        transform="translate(19.409 20.995)" fill="#fffffe" />
                                    <path id="Path_1360" data-name="Path 1360"
                                        d="M5.958,6.573H52.052a.74.74,0,0,1,.741.744V39.8a.742.742,0,0,1-.741.744H5.958a.744.744,0,0,1-.741-.744V7.317a.742.742,0,0,1,.741-.744m45.35,1.489H6.7V39.056H51.308Z"
                                        transform="translate(11.593 14.606)" fill="#fffffe" />
                                    <path id="Path_1361" data-name="Path 1361"
                                        d="M11.769,16.653h8.658a.745.745,0,0,1,.744.744v4.872a.745.745,0,0,1-.744.744H11.769a.745.745,0,0,1-.744-.744V17.4a.745.745,0,0,1,.744-.744m7.917,1.489H12.51v3.387h7.176Z"
                                        transform="translate(24.5 37.006)" fill="#fffffe" />
                                    <path id="Path_1362" data-name="Path 1362"
                                        d="M9.54,18.166a.743.743,0,0,0,0,1.485H32.55a.743.743,0,0,0,0-1.485Z"
                                        transform="translate(19.553 40.368)" fill="#fffffe" />
                                </g>
                            </g>
                        </svg> --}}

                    </span>
                    <h3>{{$service->title}}</h3>
                    <p> {!!$service->description!!}

                    </p>
                </div>
            </div>
            <!--- END COL -->

                
            @empty
        
            <div class="col-lg-4 col-md-6 atf-blog-feature">
                <div class="atf-single-feature wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s"
                    data-wow-offset="0"
                    style="visibility: visible; animation-duration: 2s; animation-delay: 0.4s; animation-name: fadeIn;">
                    <span class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="82" height="82" viewBox="0 0 82 82">
                            <defs>
                              <clipPath id="clip-path">
                                <rect id="Rectangle_133" data-name="Rectangle 133" width="82" height="82" transform="translate(0.02 0.02)" fill="none"/>
                              </clipPath>
                            </defs>
                            <g id="Group_457" data-name="Group 457" transform="translate(-0.02 -0.02)">
                              <g id="Group_449" data-name="Group 449" transform="translate(0 0)" clip-path="url(#clip-path)">
                                <path id="Path_1363" data-name="Path 1363" d="M41.01,0A41.01,41.01,0,1,1,0,41.01,41.009,41.009,0,0,1,41.01,0" transform="translate(0 0.001)" fill="#388e3c" fill-rule="evenodd"/>
                                <path id="Path_1364" data-name="Path 1364" d="M28.269,8.752a10.687,10.687,0,0,1,1.214.423,11.232,11.232,0,0,1,1.162.563l1.969-1.969a.75.75,0,0,1,1.061,0l0,0,3.287,3.287a.75.75,0,0,1,0,1.061v0L35,14.09a10.9,10.9,0,0,1,.56,1.162,10.688,10.688,0,0,1,.423,1.214h2.783a.752.752,0,0,1,.752.752v4.658a.749.749,0,0,1-.752.749H35.982a10.968,10.968,0,0,1-.423,1.217A10.847,10.847,0,0,1,35,25l1.966,1.969a.75.75,0,0,1,0,1.061v0l-3.291,3.291a.75.75,0,0,1-1.061,0l0,0-1.966-1.966a11.936,11.936,0,0,1-1.162.563,11.364,11.364,0,0,1-1.214.423v2.783a.754.754,0,0,1-.752.752H22.862a.752.752,0,0,1-.752-.752V30.341a11.677,11.677,0,0,1-1.217-.423,11.53,11.53,0,0,1-1.159-.563l-1.969,1.969a.75.75,0,0,1-1.061,0l0,0L13.41,28.03a.75.75,0,0,1,0-1.061l0,0L15.38,25a11.531,11.531,0,0,1-.563-1.159,11.677,11.677,0,0,1-.423-1.217h-2.78a.749.749,0,0,1-.752-.749V17.217a.752.752,0,0,1,.752-.752h2.78a11.363,11.363,0,0,1,.423-1.214,11.584,11.584,0,0,1,.563-1.162L13.41,12.12a.75.75,0,0,1,0-1.061l.007,0L16.7,7.769a.75.75,0,0,1,1.061,0l0,0,1.966,1.966a10.943,10.943,0,0,1,2.376-.986V5.969a.75.75,0,0,1,.752-.752h4.654a.752.752,0,0,1,.752.752Zm.641,1.806a9.3,9.3,0,0,0-1.5-.482.756.756,0,0,1-.641-.745V6.717H23.614v2.6a.758.758,0,0,1-.586.745l-.166-.732.163.732a9.609,9.609,0,0,0-1.556.495,9.9,9.9,0,0,0-1.409.723.753.753,0,0,1-.98-.072L17.235,9.36l-2.23,2.23,1.836,1.836a.754.754,0,0,1,.117.944h0a9.6,9.6,0,0,0-.752,1.455,9.755,9.755,0,0,0-.485,1.5.751.751,0,0,1-.742.641H12.362v3.154h2.6a.749.749,0,0,1,.749.583l-.732.169.729-.166a9.724,9.724,0,0,0,.5,1.556,9.574,9.574,0,0,0,.723,1.409.757.757,0,0,1-.072.98L15.005,27.5l2.23,2.233,1.836-1.839a.757.757,0,0,1,.944-.117v0a9.743,9.743,0,0,0,1.455.752,9.311,9.311,0,0,0,1.5.485.751.751,0,0,1,.641.742v2.614h3.151v-2.6a.752.752,0,0,1,.586-.749l.166.732-.166-.729a9.25,9.25,0,0,0,1.559-.5,9.423,9.423,0,0,0,1.409-.723.753.753,0,0,1,.976.072l1.849,1.852,2.23-2.233-1.836-1.836a.749.749,0,0,1-.117-.944l0,0a9.942,9.942,0,0,0,.752-1.458,9.534,9.534,0,0,0,.485-1.5.748.748,0,0,1,.742-.638h2.61V17.969h-2.6a.754.754,0,0,1-.745-.586l.732-.166-.732.166a9.646,9.646,0,0,0-.495-1.559,10.039,10.039,0,0,0-.723-1.406.753.753,0,0,1,.072-.98l1.849-1.849-2.23-2.23L31.309,11.2a.75.75,0,0,1-.944.117v0a9.744,9.744,0,0,0-1.455-.752" transform="translate(24.491 11.764)" fill="#fffffe"/>
                                <path id="Path_1365" data-name="Path 1365" d="M18.975,7.973a5.356,5.356,0,1,1-3.789,1.569,5.335,5.335,0,0,1,3.789-1.569M21.7,10.606a3.854,3.854,0,1,0,1.129,2.724A3.842,3.842,0,0,0,21.7,10.606" transform="translate(30.705 17.978)" fill="#fffffe"/>
                                <path id="Path_1366" data-name="Path 1366" d="M18.98,15.957c.273.081.537.179.8.283s.514.231.765.365l1.38-1.38a.75.75,0,0,1,1.061,0l0,0,2.467,2.47a.745.745,0,0,1,0,1.061l0,0L24.077,20.14c.133.251.254.5.365.765a8.328,8.328,0,0,1,.283.8h1.95a.749.749,0,0,1,.752.749v3.5a.749.749,0,0,1-.752.749h-1.95a7.966,7.966,0,0,1-.283.8c-.111.264-.231.518-.365.768l1.377,1.377a.748.748,0,0,1,0,1.064l0,0-2.467,2.467a.75.75,0,0,1-1.061,0l0,0L20.543,31.8c-.251.133-.5.254-.765.361s-.524.2-.8.286V34.4a.751.751,0,0,1-.752.749h-3.5a.749.749,0,0,1-.752-.749v-1.95c-.273-.085-.54-.179-.8-.286a8.258,8.258,0,0,1-.768-.361l-1.38,1.377h0a.754.754,0,0,1-1.064,0v0L7.5,30.708a.754.754,0,0,1,0-1.064l0,0,1.377-1.374A7.524,7.524,0,0,1,8.52,27.5c-.107-.257-.2-.524-.286-.8H6.284a.749.749,0,0,1-.749-.749v-3.5a.749.749,0,0,1,.749-.749h1.95c.085-.273.179-.54.286-.8a7.813,7.813,0,0,1,.365-.765L7.5,18.76a.75.75,0,0,1,0-1.061l0,0,2.467-2.47a.754.754,0,0,1,1.064,0v0l1.377,1.377a8.285,8.285,0,0,1,.768-.365c.257-.1.524-.2.8-.283v-1.95a.75.75,0,0,1,.752-.752h3.5a.752.752,0,0,1,.752.752Zm.221,1.67a7.135,7.135,0,0,0-1.084-.352.748.748,0,0,1-.641-.742V14.76h-2v1.758a.746.746,0,0,1-.583.749l-.166-.732.163.729a7.22,7.22,0,0,0-2.155.885.757.757,0,0,1-.98-.072L10.508,16.82,9.1,18.229l1.243,1.243a.754.754,0,0,1,.117.944h0a7.3,7.3,0,0,0-.55,1.064,7.429,7.429,0,0,0-.352,1.087.751.751,0,0,1-.742.638H7.035v2H8.8a.746.746,0,0,1,.745.583l-.732.169.732-.166A7.122,7.122,0,0,0,9.9,26.926a7.514,7.514,0,0,0,.524,1.019.749.749,0,0,1-.075.976L9.1,30.174l1.413,1.413,1.24-1.243a.754.754,0,0,1,.944-.117v0a7.17,7.17,0,0,0,1.068.55,7.007,7.007,0,0,0,1.084.348.754.754,0,0,1,.638.745v1.774h2V31.886a.751.751,0,0,1,.586-.745l.166.732-.166-.732A6.918,6.918,0,0,0,19.2,30.78a7.149,7.149,0,0,0,1.019-.524.753.753,0,0,1,.976.075l1.256,1.256,1.409-1.413-1.243-1.24a.758.758,0,0,1-.117-.944h0a6.707,6.707,0,0,0,.55-1.064,7.058,7.058,0,0,0,.352-1.087.748.748,0,0,1,.742-.638h1.774v-2H24.165a.755.755,0,0,1-.749-.586l.732-.166-.729.166a7.365,7.365,0,0,0-.365-1.139,6.814,6.814,0,0,0-.521-1.019.749.749,0,0,1,.072-.976l1.256-1.256L22.453,16.82,21.21,18.063a.75.75,0,0,1-.944.117l0,0a7.181,7.181,0,0,0-1.068-.55" transform="translate(12.48 29.89)" fill="#fffffe"/>
                                <path id="Path_1367" data-name="Path 1367" d="M11.813,15.325a4.212,4.212,0,1,1-2.978,1.237,4.183,4.183,0,0,1,2.978-1.237m1.914,2.3a2.707,2.707,0,1,0,.794,1.914,2.687,2.687,0,0,0-.794-1.914" transform="translate(17.147 34.555)" fill="#fffffe"/>
                              </g>
                            </g>
                          </svg>
                          

                    </span>
                    <h3>Apps Design & Development</h3>
                    <p>We offer you the possibility of designing and programming your mobile application with
                        the best modern designs for the application interface and with high quality. Contact Us.
                    </p>
                </div>
            </div>
            <!--- END COL -->

            <div class="col-lg-4 col-md-6 atf-blog-feature">
                <div class="atf-single-feature wow fadeIn" data-wow-duration="3s" data-wow-delay="0.5s"
                    data-wow-offset="0"
                    style="visibility: visible; animation-duration: 3s; animation-delay: 0.5s; animation-name: fadeIn;">
                    <span class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="85.479" height="85.479" viewBox="0 0 85.479 85.479">
                            <defs>
                              <clipPath id="clip-path">
                                <rect id="Rectangle_136" data-name="Rectangle 136" width="85.479" height="85.479" fill="none"/>
                              </clipPath>
                            </defs>
                            <g id="Group_456" data-name="Group 456" transform="translate(0 0)">
                              <g id="Group_455" data-name="Group 455" transform="translate(0 0)" clip-path="url(#clip-path)">
                                <path id="Path_1384" data-name="Path 1384" d="M42.74,0A42.74,42.74,0,1,1,0,42.74,42.741,42.741,0,0,1,42.74,0" transform="translate(0 0.001)" fill="#303f9f" fill-rule="evenodd"/>
                                <path id="Path_1385" data-name="Path 1385" d="M32.321,36.87a17.624,17.624,0,1,1,4.233-4.1L38.8,35.015l.916-.916a2.147,2.147,0,0,1,3.053.01L57.555,48.9a1.689,1.689,0,0,1,.166.183,2.539,2.539,0,0,1,.573,1.6c0,1.075-4.834,5.783-5.828,6.876a2.366,2.366,0,0,1-3.575-.007L34.1,42.755a2.149,2.149,0,0,1,0-3.049l.526-.526Z" transform="translate(11.243 11.244)" fill="#fffffe" fill-rule="evenodd"/>
                                <path id="Path_1386" data-name="Path 1386" d="M15.435,13.3l4.745,4.745A1.591,1.591,0,1,1,17.932,20.3l-4.745-4.749A1.59,1.59,0,0,1,15.435,13.3" transform="translate(30.422 30.695)" fill="#20254b" fill-rule="evenodd"/>
                                <path id="Path_1387" data-name="Path 1387" d="M13.818,19.425l5.61-5.61a.794.794,0,0,1,1.126,0l0,0,14.8,14.8.068.075a1.169,1.169,0,0,1,.271.746,1.153,1.153,0,0,1-.339.821l-.326-.322.326.326,0,0L30.26,35.351a1.163,1.163,0,0,1-1.642,0l.56-.563-.563.563,0,0-14.8-14.793a.794.794,0,0,1,0-1.126Z" transform="translate(32.486 32.487)" fill="#20254b"/>
                                <path id="Path_1388" data-name="Path 1388" d="M27.2,14.727a1.591,1.591,0,1,1,3.182,0v13.3a1.591,1.591,0,0,1-3.182,0Zm10.458,6.648a16.274,16.274,0,1,0-5.546,12.238c.265-.231.526-.475.777-.729.126-.126.244-.251.366-.377a16.23,16.23,0,0,0,4.4-11.133m-23.69.027a1.588,1.588,0,0,1,1.587,1.591v5.03a1.589,1.589,0,1,1-3.178,0v-5.03A1.591,1.591,0,0,1,13.963,21.4m3.351-.566a1.589,1.589,0,1,1,3.178,0v7.188a1.589,1.589,0,1,1-3.178,0Zm4.942,7.188V18.139a1.589,1.589,0,0,1,3.178,0v9.884a1.589,1.589,0,1,1-3.178,0" transform="translate(12.199 12.2)" fill="#20254b" fill-rule="evenodd"/>
                              </g>
                            </g>
                          </svg>
                    </span>
                    <h3>Search Engine Optimization(SEO)</h3>
                    <p>Get more leads with SEO optimization to help you increase the number of visits, and the
                        percentage of sales.</p>
                </div>
            </div>
            <!--- END COL -->
                
            @endforelse
        </div>
        <!--- END ROW -->
    </div>
    <!--- END CONTAINER -->
</section>
<!---------------------------Our Services----------------------------------->