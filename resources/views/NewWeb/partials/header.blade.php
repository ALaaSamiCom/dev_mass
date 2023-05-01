<!-- Start Header Section -->
<header class="atf-site-header atf-style1 atf-sticky-header">
    <div class="atf-top-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8">
                    <div class="atf-top-header-in">
                        <ul class="atf-top-header-list">
                            <li><a href="tel:{{$setting->phone}}"><i class="fas fa-phone-volume"></i>@lang('web.Contact') : {{$setting->phone}}</a></li>
                            <li><a href="mailto:{{$setting->email}}"><i class="fas fa-envelope"></i>@lang('web.Email') : {{$setting->email}}</a></li>

                        </ul>
                    </div>
                </div>
                <!--- END COL -->

                <div class="col-lg-3 col-md-4">
                    <div class="atf-top-social">
                        <div class="atf-top-social-icon">
                            @forelse ($links as $link)
                                <a href="{{$link->value}}" class="icon"> <i class="fab fa-{{$link->title}}"></i></a>
                            @empty
                                <a href="#" class="icon"> <i class="fab fa-facebook"></i></a>
                                <a href="#" class="icon"> <i class="fab fa-instagram"></i></a>
                                <a href="#" class="icon"> <i class="fab fa-twitter"></i> </a>
                            @endforelse
                        </div>
                        <!-- Example split danger button -->

                    </div>
                </div>
                <!--- END COL -->
            </div>
        </div>
    </div>
    <div class="atf-main-header">
        <div class="container">
            <div class="atf-main-header-in">
                <div class="atf-main-header-left">
                    <a class="atf-site-branding atf-colored-logo" href="{{url('/')}}"><img
                            src="{{$setting->logo->geturl()}}" alt="Logo" width="100%"></a>
                    <a class="atf-site-branding atf-white-logo" href="{{url('/')}}"><img
                            src="{{$setting->white_logo->geturl()}}" alt="Logo" width="100%"></a>

                </div>
                <div class="atf-main-header-right">
                    <div class="atf-nav">
                        <ul class="atf-nav-list atf-onepage-nav">
                            <li><a href="{{url(\App::getLocale().'/#home')}}" class="atf-smooth-move active">@lang('web.home')</a></li>
                            <li><a href="{{url(\App::getLocale().'/#abou-company')}}" class="atf-smooth-move">@lang('web.ABOUT_US')</a></li>
                            <li><a href="{{url(\App::getLocale().'/#SERVICES')}}" class="atf-smooth-move">@lang('web.services')</a></li>
                            <li><a href="{{url(\App::getLocale().'/#portfolio')}}" class="atf-smooth-move">@lang('web.PORTFOLIO')</a></li>
                            <li><a href="{{url(\App::getLocale().'/#atf-map-area')}}" class="atf-smooth-move" id="contact">@lang('web.CONTACT_US')</a></li>
                            <li class="btn-group languge">
                                <button type="button" class="btn ">
                                    <i class="fa fa-globe" aria-hidden="true"></i>
                                </button>
                                <button type="button" class="btn dropdown-toggle dropdown-toggle-split"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <div class="dropdown-menu">
                                    @foreach(config('panel.available_languages') as $langLocale => $langName)
                                        <a class="dropdown-item" href="{{ url($langLocale) }}">{{ strtoupper($langLocale) }} ({{ $langName }})</a>
                                    @endforeach
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--- END CONTANIER -->
    </div>
</header>
<!-- End Header Section -->
