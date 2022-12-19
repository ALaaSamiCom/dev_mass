<!DOCTYPE html>
<html lang="zxx">


<head>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">


	<!-- SITE TITLE -->
	<title>Developer Union</title>
	<!-- Favicon -->
	<!--<link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">-->

	<!-- Latest Bootstrap min CSS -->
	<link rel="stylesheet" href="{{asset('web/bootstrap/css/bootstrap.css')}}">
	<!-- Google Fonts -->
	<link
		href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500&display=swap"
		rel="stylesheet">
	<!-- Font Awesome CSS -->
	<link rel="stylesheet" href="{{asset('web/fonts/font-awesome.css')}}">
	<!--- owl carousel Css-->
	<link rel="stylesheet" href="{{asset('web/owlcarousel/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('web/owlcarousel/css/owl.theme.default.min.css')}}">
	<!--animate Css-->
	<link rel="stylesheet" href="{{asset('web/css/animate.css')}}">
	<!-- Style CSS -->
	<link rel="stylesheet" href="{{asset('web/css/style.css')}}">
	<!-- Responsive CSS -->
	<link rel="stylesheet" href="{{asset('web/css/responsive.css')}}">


    
  @if(app()->getLocale() == 'ar')    
  <link rel="stylesheet" href="{{asset('web/css/rtl.css')}}" type="text/css">
 @endif


@yield('style')


</head>

<body>

	<!-- Page Wrapper -->
	<div class="page-wrapper">


        @include('web.layout.header')
        @yield('content')
       @include('web.layout.footer')
		




		<!---------------------------------------------------------------------------------------------------------------------------->
		<!-- Latest jQuery -->
		<script src="{{asset('web/js/jquery-1.12.4.min.js')}}"></script>
		<script src="{{asset('web/js/popper.min.js')}}"></script>
		<!-- Latest compiled and minified Bootstrap -->
		<script src="{{asset('web/bootstrap/js/bootstrap.js')}}"></script>
		<!-- modernizer JS -->
		<script src="{{asset('web/js/modernizr.custom.js')}}"></script>
		<!-- owl-carousel min js  -->
		<script src="{{asset('web/owlcarousel/js/owl.carousel.min.js')}}"></script>
		<!-- jquery.appear js -->
		<script src="{{asset('web/js/jquery.appear.min.js')}}"></script>
		<!-- easing js -->
		<script src="{{asset('web/js/easing.min.js')}}"></script>
		<!-- wow js -->
		<script src="{{asset('web/js/wow.min.js')}}"></script>
		<!-- ajaxchimp js -->
		<script src="{{asset('web/js/ajaxchimp.min.js')}}"></script>
		<!-- form-contact js -->
		<script src="{{asset('web/js/form-contact.js')}}"></script>
		<!-- main js -->
		<script src="{{asset('web/js/main.js')}}"></script>
		<script src="{{asset('web/js/stepWizerd.js')}}"></script>
		<script>


			$(function () {

				var $filter = $('.filter');
				var $tab = $('.filter a');
				var $offers = $('.boxGroup .box')



				$filter.on('click touch', '.all', function (e) {
					e.preventDefault();
					$tab.removeClass('current');
					$(this).addClass('current');

					$offers.hide();
					$offers.fadeIn(700);

				});

				@forelse ($categories as $category)	
					$filter.on('click touch', '.{{$category->id}}', function (e) {
						e.preventDefault();
						$tab.removeClass('current');
						$(this).addClass('current');

						$offers.show();
						$offers.fadeOut(400);
						$offers.filter('.{{$category->id}}').fadeIn(400);

					});
				@empty
				$filter.on('click touch', '.one', function (e) {
						e.preventDefault();
						$tab.removeClass('current');
						$(this).addClass('current');

						$offers.show();
						$offers.fadeOut(400);
						$offers.filter('.one').fadeIn(400);

					});
				@endforelse






			});


		</script>
        @yield('script')


</body>

</html>