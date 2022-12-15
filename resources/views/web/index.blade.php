@extends('web.layout.parent')
@section('content')

    @include('web.partials.slider')

    @foreach($sections as $section)
        @include('web.partials'.$section->section_place)
        <!------{about}------>
    @endforeach
    @include('web.partials.contact')
@endsection

@section('scripts')
    {{-- @parent --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
<script src="{{asset('contactform/contactform.js')}}"></script>

@endsection