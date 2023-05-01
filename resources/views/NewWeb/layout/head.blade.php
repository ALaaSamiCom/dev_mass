
<!-- Meta -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">



<title>{{$setting->title}} </title>
<meta name="keywords" content="{{$setting->keywords}}">
<meta property="og:title" content="{{$setting->title}}"/>

<meta name="description" content="{{$setting->description}}">

<meta property="og:description"
      content="{{$setting->description}}" />
<meta property="og:image" content="{{asset('uploads/'.$setting->logo->geturl())}}" />

<!-- Favicons -->
<link href="{{asset('assets')}}/img/favicon.ico" rel="icon">
<link href="{{asset('assets')}}/img/favicon.ico" rel="apple-touch-icon">

<!-- Favicon -->
<!--<link rel="shortcut icon" href="{{asset('/')}}/assets/img/favicon.png" type="image/x-icon">-->

<!-- Latest Bootstrap min CSS -->
<link rel="stylesheet" href="{{asset('/')}}/assets/bootstrap/css/bootstrap.css">
<!-- Google Fonts -->
<link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500&display=swap"
    rel="stylesheet">
<!-- Font Awesome CSS -->
<link rel="stylesheet" href="{{asset('/')}}/assets/fonts/font-awesome.css">
<!--- owl carousel Css-->
<link rel="stylesheet" href="{{asset('/')}}/assets/owlcarousel/css/owl.carousel.min.css">
<link rel="stylesheet" href="{{asset('/')}}/assets/owlcarousel/css/owl.theme.default.min.css">
<!--animate Css-->
<link rel="stylesheet" href="{{asset('/')}}/assets/css/animate.css">
<!-- Style CSS -->
<link rel="stylesheet" href="{{asset('/')}}/assets/css/style.css">
<!-- Responsive CSS -->
<link rel="stylesheet" href="{{asset('/')}}/assets/css/responsive.css">



@if(app()->getLocale() == 'ar')
    <link rel="stylesheet" href="{{asset('/')}}/assets/css/rtl.css">
@endif


@yield('style')
{!! $setting->head_tags !!}
