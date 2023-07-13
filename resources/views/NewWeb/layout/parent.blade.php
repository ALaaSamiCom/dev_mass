<!DOCTYPE html>
<html dir="@lang('global.dir')" lang="{{app()->getLocale()}}">


<head>
    <!-- Meta -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$setting->title}} </title>
    <link rel="shortcut icon" href="{{asset('newweb_assets')}}/images/iconlogo.png">
    <link rel="stylesheet" href="{{asset('newweb_assets')}}/lib/font-awesome/css/all.css">
    <link rel="stylesheet" href="{{asset('newweb_assets')}}/lib/swiper/swiper-bundle.min.css"/>
    <link href="{{asset('newweb_assets')}}/lib/animate/aos.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="assets/css/indexAr.css"> -->
    @if(app()->getLocale() == 'ar')
        <link rel="stylesheet" href="{{asset('newweb_assets')}}/lib/bootstrap/css/bootstrap.rtl.min.css">
    @elseif(app()->getLocale() == 'en')
        <link rel="stylesheet" href="{{asset('newweb_assets')}}/lib/bootstrap/css/bootstrap.min.css">
    @endif
    <link rel="stylesheet" href="{{asset('newweb_assets')}}/css/index.css">


    <meta name="keywords" content="{{$setting->keywords}}">
    <meta property="og:title" content="{{$setting->title}}"/>

    <meta name="description" content="{{$setting->description}}">

    <meta property="og:description"
          content="{{$setting->description}}"/>
    {{--<meta property="og:image" content="{{asset('uploads/'.$setting->logo->geturl())}}" />--}}

    @yield('style')
    {!! $setting->head_tags !!}
</head>

<body>
{!! $setting->body_tags !!}

<div class="page-wrapper">


    @include('NewWeb.layout.header')
    @yield('content')
    @include('NewWeb.layout.footer')


</div>

<a class="whats-app" href="{{$setting->phone}}" target="_blank">
    <i class="fa fa-whatsapp my-float"></i>
</a>
<!---------------------------------------------------------------------------------------------------------------------------->
<!-- Latest jQuery -->
<script src="{{asset('newweb_assets')}}/js/index.js"></script>
<script>

    function removeFirstSegment(url) {
        return url.replace('/ar', '').replace('/en', '');
    }

    document.addEventListener("DOMContentLoaded", function () {

        var currentUrl = removeFirstSegment(window.location.href);

        console.log(currentUrl);
        var links = document.getElementsByClassName("nav-link-title");
        console.log(links);
        for (var i = 0; i < links.length; i++) {
            console.log(links[i].getAttribute("href"));

            if (links[i].getAttribute("href") === currentUrl) {
                links[i].classList.add("active");
                break;
            }
        }
    });

</script>
@yield('script')

</body>

</html>
