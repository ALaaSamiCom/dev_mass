		<!-- START PRELOADER -->
		<div class="atf-preloader">
			<div class="atf-status">
				<div class="atf-status-mes"></div>
			</div>
		</div>
		<!--  END PRELOADER -->

		<!-- START back-to-top -->
		<button class="atf-scroll-top atf-back-to-top" data-targets="html">
			<i class="fa fa-angle-up atf-scrollup-icon"></i>
		</button>
		<!-- END back-to-top-->

		<!-- Start Header Section -->
		<header class="atf-site-header atf-style1 atf-sticky-header">
			<div class="atf-top-header">
				<div class="container">
					<div class="row">
						<div class="col-lg-9 col-md-8">
							<div class="atf-top-header-in">
								<ul class="atf-top-header-list">
									<li><i class="fas fa-phone-volume"></i>@lang('web.Contact') <a href="#">{{$setting->phone}}</a></li>
									<li><i class="fas fa-envelope"></i>@lang('web.Email') <a href="#">{{$setting->email}}</a></li>

								</ul>
							</div>
						</div>
						<!--- END COL -->


						<div class="col-lg-3 col-md-4">
							<div class="atf-top-social">
								<div class="atf-top-social-icon">
									@forelse ($links as $link)
									<a href="{{$link->value}}" class="icon">
									  <i class="fab fa-{{$link->title}}"></i>
									</a>
									@empty
									<a href="#" class="icon"> <i class="fab fa-facebook"></i> </a>
									<a href="#" class="icon"> <i class="fab fa-instagram"></i></a>
									<a href="#" class="icon"> <i class="fab fa-twitter"></i> </a>
								  </li>
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
							<a class="atf-site-branding atf-white-logo" href="{{url('/')}}"><img src="{{$setting->logo->geturl()}}"
									alt="Logo" width="100%"></a>
						</div>
						<div class="atf-main-header-right">
							<div class="atf-nav">
								<ul class="atf-nav-list atf-onepage-nav">
									<li class="menu-item-has-children"><a href="#home"
										class="atf-smooth-move">@lang('web.home')</a></li>
									{{-- @forelse ($headerpages as $headerpage )
									<li class="menu-item-has-children"><a href="{{$headerpage->id}}"
											class="atf-smooth-move">{{$headerpage->title}}</a></li>
									@empty --}}
								<li><a href="#step-steps" class="atf-smooth-move">@lang('web.WorkFlow')</a></li>
								<li><a href="#portfolio">@lang('web.PORTFOLIO')</a></li>
								<li><a href="#abou-company" class="atf-smooth-move">@lang('web.ABOUT_US')</a></li>
								<li><a href="#atf-map-area" class="atf-smooth-move" id="contact">@lang('web.CONTACT_US')</a></li>
								<li>
								{{-- @endforelse --}}



									   @if(count(config('panel.available_languages', [])) > 1)

										<div class="btn-group">
											<button type="button" class="btn dropdown-toggle dropdown-toggle-split"
											data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											@lang('web.language') </button>
											{{-- {{ strtoupper(app()->getLocale()) }} --}}
											{{-- <button type="button"
												class="btn dropdown-toggle dropdown-toggle-split"
												data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<span class="sr-only"></span>
											</button> --}}
											<div class="dropdown-menu">
												@foreach(config('panel.available_languages') as $langLocale => $langName)
                                               <a class="dropdown-item" href="{{ url()->current() }}?change_language={{ $langLocale }}">{{ strtoupper($langLocale) }} ({{ $langName }})</a>
                                                 @endforeach
												{{-- <a class="dropdown-item" href="{{url('ar')}}">Arabic</a>
												<a class="dropdown-item" href="{{url('en')}}">English</a> --}}
											</div>
										</div>
										@endif

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

