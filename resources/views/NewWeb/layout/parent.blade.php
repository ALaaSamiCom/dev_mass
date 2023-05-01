<!DOCTYPE html>
<html lang="@lang('global.dir')">


<head>
    @include('NewWeb.layout.head')
</head>

<body>
{!! $setting->body_tags !!}

<div class="page-wrapper">
    <!-- START back-to-top -->
    <button class="atf-scroll-top atf-back-to-top" data-targets="html">
        <i class="fa fa-angle-up atf-scrollup-icon"></i>
    </button>
    <!-- END back-to-top-->

        @include('NewWeb.partials.header')
        @yield('content')
       @include('NewWeb.layout.footer')
</div>

@include('NewWeb.layout.js')
@yield('script')

</body>

</html>
