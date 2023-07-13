@extends('NewWeb.layout.parent')

@section('content')

{{--    @include('NewWeb.partials.slider')--}}

    @foreach($sections as $section)
        @include('NewWeb.partials.'.$section->section_place)
        <!------{about}------>
    @endforeach




@endsection

@section('script')

   <script src="{{asset('newweb_assets')}}/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
   <script src="{{asset('newweb_assets')}}/lib/swiper/swiper-bundle.min.js"></script>
   <script src="{{asset('newweb_assets')}}/lib/animate/aso.js"></script>
   <script src="{{asset('newweb_assets')}}/js/index.js"></script>
   <script>
       let swiperSliderhome = new Swiper(".Swipersliderhome", {
           pagination: {
               el: ".swiper-pagination",
           },
           spaceBetween: 1,
           keyboard: {
               enabled: true,
           },
           autoplay: {
               delay: 5000,
               disableOnInteraction: false,
           },
           loop: true,
       });
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

   </script>
@endsection
