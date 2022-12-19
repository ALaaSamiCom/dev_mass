
		<!-- START HOME -->
		@forelse ($sliders as $slider)
		<section id="home" class="atf-home2-area atf-align-items-details"
			style="background-image: url({{$slider->image->getUrl()}});
			  background-size:cover; background-position: center center;">
			<div class="atf-round-area d-none d-lg-block"></div>
			<div class="container">
				<div class="row atf-content-details align-items-center">
					<!--LEFT COL-->
					<div class="col-lg-12 col-md-8 col-12 offset-lg-2 offset-md-2 atf-single-details text-center">
						<h3 class="mb-0 d-block d-lg-block text-white mb-2">{{$slider->title}}</h3>

						<p class="">{!!$slider->description!!}</p>
						<!-- Main-btn -->
						@if (isset($slider->link))
						<div class="atf-main-btn atf-main-btn2 mt-3">
							<a href="{{$slider->link}}"
								class="page-scroll atf-themes-btn mr-4"><span></span><span></span><span></span><span></span>@lang('web.discover_more') <i class="fa fa-angle-right ml-2"></i></a>
						</div>
						@endif
						
					</div>
					<!--- END COL -->
				</div>
				<!--- END ROW -->
			</div>
			<!--- END CONTAINER -->
		</section>
		<!-- END HOME -->
			
		@empty

		<!-- START HOME -->
		<section id="home" class="atf-home2-area atf-align-items-details"
			style="background-image: url(assets/img/slider/3.png);  background-size:cover; background-position: center center;">
			<div class="atf-round-area d-none d-lg-block"></div>
			<div class="container">
				<div class="row atf-content-details align-items-center">
					<!--LEFT COL-->
					<div class="col-lg-12 col-md-8 col-12 offset-lg-2 offset-md-2 atf-single-details text-center">
						<h3 class="mb-0 d-block d-lg-block text-white mb-2">Worlds Of Technical
							Solution To Realize
							Your Vision..</h3>

						<p class="">We assign you a manager for your technical project to supervise and follow up the
							work from the start. of the project until delivery.</p>
						<!-- Main-btn -->
						<div class="atf-main-btn atf-main-btn2 mt-3">
							<a href="https://www.templatemonster.com/landing-page-template/al-mujib-multipurpose-busniess-amp-consulting-agency-landing-page-template-145313.html"
								class="page-scroll atf-themes-btn mr-4"><span></span><span></span><span></span><span></span>Discover
								more <i class="fa fa-angle-right ml-2"></i></a>
						</div>
					</div>
					<!--- END COL -->
				</div>
				<!--- END ROW -->
			</div>
			<!--- END CONTAINER -->
		</section>
		<!-- END HOME -->
			
		@endforelse
		
