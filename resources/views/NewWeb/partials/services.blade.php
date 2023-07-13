<section>
    <div class="container mb-5">
        <div class="row g-4 text-center Devun-sec">
            @forelse($our_missions as $mission)
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card" data-aos="flip-left" data-aos-easing="linear">
                        <div class="front text-center">
                            <div class="bg-shapimg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="35.813" height="37.222"
                                     viewBox="0 0 35.813 37.222">
                                    <g id="Iconly_Light_Setting" data-name="Iconly/Light/Setting"
                                       transform="translate(2.013 2)">
                                        <g id="Setting">
                                            <path id="Path_33946"
                                                  d="M31.324,9.239,30.212,7.372A3.483,3.483,0,0,0,25.55,6.154h0a3.5,3.5,0,0,1-2.582.35,3.392,3.392,0,0,1-2.08-1.52A3.086,3.086,0,0,1,20.43,3.4h0A3.248,3.248,0,0,0,19.464,1a3.477,3.477,0,0,0-2.453-1H14.77a3.462,3.462,0,0,0-2.412.969,3.236,3.236,0,0,0-.991,2.337h0A3.383,3.383,0,0,1,6.313,6.122h0A3.483,3.483,0,0,0,1.651,7.34L.457,9.239A3.247,3.247,0,0,0,1.7,13.748h0a3.253,3.253,0,0,1,0,5.727h0A3.232,3.232,0,0,0,.457,23.967h0L1.586,25.85a3.4,3.4,0,0,0,2.056,1.578,3.522,3.522,0,0,0,2.606-.3h0A3.487,3.487,0,0,1,8.83,26.8a3.373,3.373,0,0,1,2.064,1.537,3.086,3.086,0,0,1,.458,1.582h0a3.364,3.364,0,0,0,3.419,3.306h2.241a3.365,3.365,0,0,0,3.419-3.291h0a3.236,3.236,0,0,1,1-2.343,3.462,3.462,0,0,1,2.422-.964,3.574,3.574,0,0,1,1.636.443h0a3.483,3.483,0,0,0,4.662-1.2h0l1.178-1.9a3.2,3.2,0,0,0,.348-2.5,3.307,3.307,0,0,0-1.591-2h0a3.307,3.307,0,0,1-1.591-2,3.2,3.2,0,0,1,.348-2.5,3.3,3.3,0,0,1,1.243-1.2h0a3.247,3.247,0,0,0,1.243-4.493h0Z"
                                                  fill="none" stroke="#fff" stroke-linecap="round"
                                                  stroke-linejoin="round"
                                                  stroke-miterlimit="10" stroke-width="4"/>
                                            <ellipse id="Ellipse_737" cx="4.711" cy="4.556" rx="4.711" ry="4.556"
                                                     transform="translate(11.188 12.055)" fill="none" stroke="#fff"
                                                     stroke-linecap="round" stroke-linejoin="round"
                                                     stroke-miterlimit="10"
                                                     stroke-width="4"/>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <h5 class="card-title mb-0">{{$mission->title}}</h5>
                        </div>
                        <div class="back text-center bg-primary rounded-3 p-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="35.813" height="37.222"
                                 viewBox="0 0 35.813 37.222">
                                <g id="Iconly_Light_Setting" data-name="Iconly/Light/Setting"
                                   transform="translate(2.013 2)">
                                    <g id="Setting">
                                        <path id="Path_33946"
                                              d="M31.324,9.239,30.212,7.372A3.483,3.483,0,0,0,25.55,6.154h0a3.5,3.5,0,0,1-2.582.35,3.392,3.392,0,0,1-2.08-1.52A3.086,3.086,0,0,1,20.43,3.4h0A3.248,3.248,0,0,0,19.464,1a3.477,3.477,0,0,0-2.453-1H14.77a3.462,3.462,0,0,0-2.412.969,3.236,3.236,0,0,0-.991,2.337h0A3.383,3.383,0,0,1,6.313,6.122h0A3.483,3.483,0,0,0,1.651,7.34L.457,9.239A3.247,3.247,0,0,0,1.7,13.748h0a3.253,3.253,0,0,1,0,5.727h0A3.232,3.232,0,0,0,.457,23.967h0L1.586,25.85a3.4,3.4,0,0,0,2.056,1.578,3.522,3.522,0,0,0,2.606-.3h0A3.487,3.487,0,0,1,8.83,26.8a3.373,3.373,0,0,1,2.064,1.537,3.086,3.086,0,0,1,.458,1.582h0a3.364,3.364,0,0,0,3.419,3.306h2.241a3.365,3.365,0,0,0,3.419-3.291h0a3.236,3.236,0,0,1,1-2.343,3.462,3.462,0,0,1,2.422-.964,3.574,3.574,0,0,1,1.636.443h0a3.483,3.483,0,0,0,4.662-1.2h0l1.178-1.9a3.2,3.2,0,0,0,.348-2.5,3.307,3.307,0,0,0-1.591-2h0a3.307,3.307,0,0,1-1.591-2,3.2,3.2,0,0,1,.348-2.5,3.3,3.3,0,0,1,1.243-1.2h0a3.247,3.247,0,0,0,1.243-4.493h0Z"
                                              fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round"
                                              stroke-miterlimit="10" stroke-width="4"/>
                                        <ellipse id="Ellipse_737" cx="4.711" cy="4.556" rx="4.711" ry="4.556"
                                                 transform="translate(11.188 12.055)" fill="none" stroke="#fff"
                                                 stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                                 stroke-width="4"/>
                                    </g>
                                </g>
                            </svg>
                            <p class="card-text text-white mb-0 mt-4">
                                {{$mission->description}}
                            </p>
                            <button href="{{url('/')}}" class="btn btn-white">
                                @lang('web.CONTACT_US')
                            </button>
                        </div>
                    </div>
                </div>
            @empty
            @endforelse                <div class="col-12 col-md-6 col-lg-3">
                <div class="card" data-aos="flip-left" data-aos-easing="linear">
                    <div class="front text-center">
                        <div class="bg-shapimg">
                            <svg xmlns="http://www.w3.org/2000/svg" width="35.813" height="37.222"
                                 viewBox="0 0 35.813 37.222">
                                <g id="Iconly_Light_Setting" data-name="Iconly/Light/Setting"
                                   transform="translate(2.013 2)">
                                    <g id="Setting">
                                        <path id="Path_33946"
                                              d="M31.324,9.239,30.212,7.372A3.483,3.483,0,0,0,25.55,6.154h0a3.5,3.5,0,0,1-2.582.35,3.392,3.392,0,0,1-2.08-1.52A3.086,3.086,0,0,1,20.43,3.4h0A3.248,3.248,0,0,0,19.464,1a3.477,3.477,0,0,0-2.453-1H14.77a3.462,3.462,0,0,0-2.412.969,3.236,3.236,0,0,0-.991,2.337h0A3.383,3.383,0,0,1,6.313,6.122h0A3.483,3.483,0,0,0,1.651,7.34L.457,9.239A3.247,3.247,0,0,0,1.7,13.748h0a3.253,3.253,0,0,1,0,5.727h0A3.232,3.232,0,0,0,.457,23.967h0L1.586,25.85a3.4,3.4,0,0,0,2.056,1.578,3.522,3.522,0,0,0,2.606-.3h0A3.487,3.487,0,0,1,8.83,26.8a3.373,3.373,0,0,1,2.064,1.537,3.086,3.086,0,0,1,.458,1.582h0a3.364,3.364,0,0,0,3.419,3.306h2.241a3.365,3.365,0,0,0,3.419-3.291h0a3.236,3.236,0,0,1,1-2.343,3.462,3.462,0,0,1,2.422-.964,3.574,3.574,0,0,1,1.636.443h0a3.483,3.483,0,0,0,4.662-1.2h0l1.178-1.9a3.2,3.2,0,0,0,.348-2.5,3.307,3.307,0,0,0-1.591-2h0a3.307,3.307,0,0,1-1.591-2,3.2,3.2,0,0,1,.348-2.5,3.3,3.3,0,0,1,1.243-1.2h0a3.247,3.247,0,0,0,1.243-4.493h0Z"
                                              fill="none" stroke="#fff" stroke-linecap="round"
                                              stroke-linejoin="round"
                                              stroke-miterlimit="10" stroke-width="4"/>
                                        <ellipse id="Ellipse_737" cx="4.711" cy="4.556" rx="4.711" ry="4.556"
                                                 transform="translate(11.188 12.055)" fill="none" stroke="#fff"
                                                 stroke-linecap="round" stroke-linejoin="round"
                                                 stroke-miterlimit="10"
                                                 stroke-width="4"/>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <h5 class="card-title mb-0">Customized Solutions</h5>
                    </div>
                    <div class="back text-center bg-primary rounded-3 p-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="35.813" height="37.222"
                             viewBox="0 0 35.813 37.222">
                            <g id="Iconly_Light_Setting" data-name="Iconly/Light/Setting"
                               transform="translate(2.013 2)">
                                <g id="Setting">
                                    <path id="Path_33946"
                                          d="M31.324,9.239,30.212,7.372A3.483,3.483,0,0,0,25.55,6.154h0a3.5,3.5,0,0,1-2.582.35,3.392,3.392,0,0,1-2.08-1.52A3.086,3.086,0,0,1,20.43,3.4h0A3.248,3.248,0,0,0,19.464,1a3.477,3.477,0,0,0-2.453-1H14.77a3.462,3.462,0,0,0-2.412.969,3.236,3.236,0,0,0-.991,2.337h0A3.383,3.383,0,0,1,6.313,6.122h0A3.483,3.483,0,0,0,1.651,7.34L.457,9.239A3.247,3.247,0,0,0,1.7,13.748h0a3.253,3.253,0,0,1,0,5.727h0A3.232,3.232,0,0,0,.457,23.967h0L1.586,25.85a3.4,3.4,0,0,0,2.056,1.578,3.522,3.522,0,0,0,2.606-.3h0A3.487,3.487,0,0,1,8.83,26.8a3.373,3.373,0,0,1,2.064,1.537,3.086,3.086,0,0,1,.458,1.582h0a3.364,3.364,0,0,0,3.419,3.306h2.241a3.365,3.365,0,0,0,3.419-3.291h0a3.236,3.236,0,0,1,1-2.343,3.462,3.462,0,0,1,2.422-.964,3.574,3.574,0,0,1,1.636.443h0a3.483,3.483,0,0,0,4.662-1.2h0l1.178-1.9a3.2,3.2,0,0,0,.348-2.5,3.307,3.307,0,0,0-1.591-2h0a3.307,3.307,0,0,1-1.591-2,3.2,3.2,0,0,1,.348-2.5,3.3,3.3,0,0,1,1.243-1.2h0a3.247,3.247,0,0,0,1.243-4.493h0Z"
                                          fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round"
                                          stroke-miterlimit="10" stroke-width="4"/>
                                    <ellipse id="Ellipse_737" cx="4.711" cy="4.556" rx="4.711" ry="4.556"
                                             transform="translate(11.188 12.055)" fill="none" stroke="#fff"
                                             stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                             stroke-width="4"/>
                                </g>
                            </g>
                        </svg>
                        <p class="card-text text-white mb-0 mt-4">
                            Bringing imagination technology together to deliver high performing
                        </p>
                        <button class="btn btn-white">
                            @lang('web.CONTACT_US')
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section>
    <div class="container position-relative pt-lg-5 mb-5">
        <div class="row text-center col-12 col-lg-9 mx-auto ideas-sec" data-aos="zoom-in-down" data-aos-easing="linear">
            <h3>Our ideas <span class="text-primary">OUTSIDE OF THE BOX</span>
            </h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                and scrambled it to make a type specimen book. It has survived.</p>
        </div>
        <img src="{{asset('newweb_assets')}}/images/iii.svg" class="position-absolute bottom-0 end-0 z-index"/>

    </div>
</section>

<article id="EXPLORE_SERVICES">
    <div class="container position-relative mb-4 mb-lg-5">
        <div
            class="row flex-column-reverse flex-lg-row justify-content-between align-items-center col-12 col-lg-10 mx-auto">
            <div class="col-12 col-lg-5 mt-3 mt-lg-0" data-aos="zoom-out-up" data-aos-easing="linear">
                <h2 class="text-primary">Our Services</h2>
                <p>We assign you a manager for your technical project scrambled it to make a type specimen book. It
                    has survived.</p>
            </div>
            <div class="col-12 col-lg-6" data-aos="zoom-in-down" data-aos-easing="linear">
                <img src="{{asset('newweb_assets')}}/images/Services.png" class="img-fluid rounded-3 shadow"/>
            </div>
        </div>
        <img src="{{asset('newweb_assets')}}/images/services.svg"
             class="position-absolute top-50 start-0 translate-middle z-index"/>
    </div>
</article>

<section>
    <div class="container mb-3 mb-lg-5 pb-3 position-relative">
        <div class="row  col-12 col-lg-10 mx-auto justify-content-center serv-sec">
            @forelse ($services as $service)
                <div class="col-12 col-md-6 col-lg-4" data-aos="zoom-in-up" data-aos-easing="linear">
                    <a href="{{url('services/'.$service->id)}}" class="card text-center align-items-center text-decoration-none">
                        <img src="{{asset('newweb_assets')}}/images/webDesign.png" width="80" class="p-2">
                        <h5 class="card-title my-3">{{$service->title}}</h5>
                        <p class="px-3">{!! $service->description!!} </p>
                    </a>
                </div>
            @empty
                <div class="col-12 col-md-6 col-lg-4" data-aos="zoom-in-up" data-aos-easing="linear">
                    <a href="" class="card text-center align-items-center text-decoration-none">
                        <img src="{{asset('newweb_assets')}}/images/webDesign.png" width="80" class="p-2">
                        <h5 class="card-title my-3">Web Design</h5>
                        <p class="px-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                            Ipsum has been </p>
                    </a>
                </div>
            @endforelse

            <img src="{{asset('newweb_assets')}}/images/serv-carcle.svg"
                 class="w-50 position-absolute start-0 bottom-0 z-index"/>
        </div>
    </div>
</section>

