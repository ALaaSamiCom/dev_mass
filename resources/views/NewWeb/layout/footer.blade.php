<!--Start Footer-->
<section id="footer">
    <div class="footer-curve">
        <div class="atf-section-padding">
            <div class="container">
                <div class="footer-content">
                    <div class="top-footer">
                        <p>@lang('web.topfooter')</p>
                        <span>@lang('web.towtopfooter')</span>


                    </div>
                    <div class="contact-data">
                        <div class="row">
                            <div class="col-4 col-sm-4">
                                <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                                    <div class="toast-header">
												<span class="icon">
													<svg xmlns="http://www.w3.org/2000/svg" width="22.032"
                                                         height="22.033" viewBox="0 0 36.032 36.033">
														<path id="phone-Filled_1_"
                                                              d="M767.617,2876.711a8.106,8.106,0,0,1-6.147,2.822c-.074,0-.148,0-.222,0a28.532,28.532,0,0,1-27.746-27.748,8.119,8.119,0,0,1,2.839-6.4,7.64,7.64,0,0,1,6.351-1.765,6.641,6.641,0,0,1,.9.225,2.827,2.827,0,0,1,1.9,2.257l1.271,8.07a2.875,2.875,0,0,1-1.026,2.676c-.159.129-.324.252-.5.366a1.022,1.022,0,0,0-.41,1.263,18.694,18.694,0,0,0,9.721,9.723,1.028,1.028,0,0,0,1.273-.421c.089-.129.182-.256.277-.377a2.871,2.871,0,0,1,2.714-1.038l8.216,1.367a2.794,2.794,0,0,1,2.249,1.959c.051.184.1.393.142.63A7.728,7.728,0,0,1,767.617,2876.711Z"
                                                              transform="translate(-733.499 -2843.5)" fill="#fff" />
													</svg>

												</span>
                                        <p class="me-auto ">@lang('web.phone'):
                                            <br>
                                            <span class="me-auto ">{{$setting->phone}}</span>
                                        </p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-4 col-sm-4">
                                <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                                    <div class="toast-header">
												<span class="icon">
													<svg xmlns="http://www.w3.org/2000/svg" width="30.85" height="22.25"
                                                         viewBox="0 0 40.85 32.25">
														<path id="envelope-Filled_1_"
                                                              d="M558.4,2789l-15.415-10.944a9.666,9.666,0,0,1,8.192-4.558h21.5a9.674,9.674,0,0,1,8.191,4.537l-15.373,10.922A6.444,6.444,0,0,1,558.4,2789Zm23.908-6.686-14.362,10.191a10.926,10.926,0,0,1-6.042,1.827,10.68,10.68,0,0,1-5.934-1.806l-14.427-10.213c-.022.279-.043.581-.043.86v12.9a9.69,9.69,0,0,0,9.675,9.675h21.5a9.69,9.69,0,0,0,9.675-9.675v-12.9C582.35,2782.9,582.329,2782.594,582.307,2782.315Z"
                                                              transform="translate(-541.5 -2773.5)" fill="#fff" />
													</svg>


												</span>
                                        <p class="me-auto ">@lang('web.email'):
                                            <br>
                                            <span class="me-auto"> {{$setting->email}}</span>
                                        </p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-4 col-sm-4">
                                <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                                    <div class="toast-header">
												<span class="icon">
													<svg xmlns="http://www.w3.org/2000/svg" width="27" height="22"
                                                         viewBox="0 0 41.071 37.667">
														<path id="noun-share-5582937"
                                                              d="M138.97,69.543a7.215,7.215,0,1,0-6.879-5.438l-10.722,4.969a9,9,0,1,0,0,10.2l10.7,4.959a7.177,7.177,0,1,0,1.252-2.653l-10.711-4.964a8.825,8.825,0,0,0,0-4.886l10.755-4.985a7.061,7.061,0,0,0,5.6,2.8Z"
                                                              transform="translate(-105 -55.303)" fill="#fff" />
													</svg>
												</span>
                                        <p class="me-auto ">@lang('web.website'):
                                            <br>
                                            <span class="me-auto ">{{url(app()->getLocale())}}</span>
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer-links">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-3">
                                <div class="single-col about-us">
                                    <h4 class="col-title">@lang('web.aboutus')</h4>
                                    <p class="about-description">
                                        {{$setting->description}}
                                    </p>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-3">
                                <div class="single-col links ">
                                    <h4 class="col-title">@lang('web.links')</h4>
                                    <ul class="company-links">
                                        <li>
                                            <a href="{{url(app()->getLocale())}}" class="menu-link">@lang('web.home')</a>
                                        </li>
                                        @forelse($alinks as $alink)
                                            <li>
                                                <a href="{{url(app()->getLocale().$alink->page_title)}}" class="menu-link">{{$alink->title}}</a>
                                            </li>

                                        @empty
                                            <li>
                                                <a href="{{url(app()->getLocale().'about')}}" class="menu-link">@lang('web.ABOUT_US')</a>
                                            </li>
                                            <li>
                                                <a href="{{url(app()->getLocale().'services')}}" class="menu-link">@lang('web.services')</a>
                                            </li>
                                            <li>
                                                <a href="{{url(app()->getLocale().'Consulting')}}" class="menu-link">@lang('web.Consulting')</a>
                                            </li>
                                        @endforelse
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-3">
                                <div class="single-col links company-links">
                                    <h4 class="col-title">company</h4>
                                    <ul class="company-links">
                                        @forelse($blinks as $blink)
                                            <li>
                                                <a href="{{url(app()->getLocale().$blink->page_title)}}" class="menu-link">{{$blink->title}}</a>
                                            </li>

                                        @empty
                                            <li>
                                                <a href="{{url(app()->getLocale().'about')}}" class="menu-link">@lang('web.ABOUT_US')</a>
                                            </li>
                                            <li>
                                                <a href="{{url(app()->getLocale().'services')}}" class="menu-link">@lang('web.services')</a>
                                            </li>
                                            <li>
                                                <a href="{{url(app()->getLocale().'Consulting')}}" class="menu-link">@lang('web.Consulting')</a>
                                            </li>
                                        @endforelse
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-3">
                                <div class="single-col links company-links comany-information">
                                    <h4 class="col-title">Get in touch</h4>
                                    <ul class="company-links">
                                        <li>
                                            <span>{{$setting->address}}</span>
                                        </li>
                                        <li>
													<span>
														{{$setting->phone}}
													</span>
                                        </li>
                                        <li>
                                            <span>{{$setting->email}}</span>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer-bottom">
                        <div class="row">
                            <div class="col-6 col-sm-6">
                                <div class="single-col">
                                    <p>@lang('web.rights')</p>
                                </div>
                            </div>
                            <div class="col-6 col-sm-6">
                                <div class="single-col">
                                    <ul class="social-media">
                                        @forelse($links as $link)
                                            <li>
                                                <a href="{{$link->value}}" class="social-link">
                                                    <i class="fab fa-{{$link->title}}"></i>
                                                </a>
                                            </li>
                                        @empty
                                            <li>
                                                <a href="#" class="social-link">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20.957"
                                                         height="20.957" viewBox="0 0 30.957 30.957">
                                                        <g id="Group_56074" data-name="Group 56074"
                                                           transform="translate(-1668.905 -6155.42)">
                                                            <path id="Vector"
                                                                  d="M21.283,0H9.674A9.675,9.675,0,0,0,0,9.674V21.283a9.675,9.675,0,0,0,9.674,9.674H21.283a9.675,9.675,0,0,0,9.674-9.674V9.674A9.675,9.675,0,0,0,21.283,0Zm6.772,21.283a6.779,6.779,0,0,1-6.772,6.772H9.674A6.779,6.779,0,0,1,2.9,21.283V9.674A6.779,6.779,0,0,1,9.674,2.9H21.283a6.779,6.779,0,0,1,6.772,6.772Z"
                                                                  transform="translate(1668.905 6155.42)"
                                                                  fill="#fff" />
                                                            <path id="Vector-2" data-name="Vector"
                                                                  d="M7.739,0a7.739,7.739,0,1,0,7.739,7.739A7.739,7.739,0,0,0,7.739,0Zm0,12.576a4.837,4.837,0,1,1,4.837-4.837A4.844,4.844,0,0,1,7.739,12.576Z"
                                                                  transform="translate(1676.644 6163.16)"
                                                                  fill="#fff" />
                                                            <path id="Vector-3" data-name="Vector"
                                                                  d="M2.062,1.031A1.031,1.031,0,1,1,1.031,0,1.031,1.031,0,0,1,2.062,1.031Z"
                                                                  transform="translate(1691.672 6161.548)"
                                                                  fill="#fff" />
                                                        </g>
                                                    </svg>

                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="social-link">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20.314"
                                                         height="16.817" viewBox="0 0 29.314 23.817">
                                                        <path id="Vector"
                                                              d="M29.314,2.82a12.529,12.529,0,0,1-3.463.949A5.976,5.976,0,0,0,28.495.447,12.01,12.01,0,0,1,24.684,1.9a6.009,6.009,0,0,0-10.4,4.109,6.188,6.188,0,0,0,.139,1.37A17.01,17.01,0,0,1,2.041,1.1,6.011,6.011,0,0,0,3.888,9.128a5.935,5.935,0,0,1-2.715-.74v.066a6.037,6.037,0,0,0,4.815,5.9,6,6,0,0,1-1.576.2,5.314,5.314,0,0,1-1.138-.1A6.067,6.067,0,0,0,8.889,18.64,12.075,12.075,0,0,1,1.438,21.2,11.256,11.256,0,0,1,0,21.12a16.918,16.918,0,0,0,9.219,2.7c11.059,0,17.1-9.16,17.1-17.1,0-.266-.009-.522-.022-.777A11.989,11.989,0,0,0,29.314,2.82Z"
                                                              fill="#fff" />
                                                    </svg>


                                                </a>
                                            </li>
                                        @endforelse
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Footer-->
