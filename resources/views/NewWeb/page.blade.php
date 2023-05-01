@extends('NewWeb.layout.parent')
@section('content')

    @include('NewWeb.partials.pageheader')

    @foreach($sections as $section)
        @include('NewWeb.partials.'.$section->section_place)
    @endforeach
@endsection

@section('script')
    {{-- @parent --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script src="{{asset('contactform/contactform.js')}}"></script>

@endsection
