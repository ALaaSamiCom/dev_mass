@extends('web.layout.parent')
@section('content')

<section id="portfolio" class="atf-feature-area atf-section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-xl-6">
                <br><br><br>
                <div class="atf-section-title text-center wow fadeInUp" data-wow-duration="1s"
                    data-wow-delay="0.3s" data-wow-offset="0"
                    style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s;">
                    
                    <div class="atf-sec_icon my-3"><span></span><span
                            class="atf-sec_radius"></span><span></span></div>
                </div>
            </div>
            <!--- END COL -->
        </div>
        <!------------------------------------Tabs----------------------------------------->
        <div class="filter">
            <a class="all current" href="#">@lang('web.show_All')</a>
            @forelse ($categories as $category)           
                <a class="{{$category->id}}" href="#">{{$category->title}}</a>                
            @empty
                <a class="one" href="#">web</a>
                <a class="three" href="#">Design</a>
                <a class="four" href="#">Graphic Design& Business Identity</a>
            @endforelse
        </div>
        <div class="boxGroup">
            <div class="row">
                @forelse ($products as $product)
                    <div class="col-6 col-sm-6 col-md-4">
                        <div class="box {{$product->category->id}}">
                            <div class="image">
                                <img src="{{$product->image->geturl()}}" />
                            </div>
                            <h6>{{$product->title}}</h6>
                            <p>{{$product->short_description}}</p>
                        </div>
                    </div>    
                @empty
                    <div class="col-6 col-sm-6 col-md-4">
                        <div class="box one">
                            <div class="image">
                                <img src="assets/img/Menu-Matjarko.png">
                            </div>
                            <h6>Menu Matjarko</h6>
                            <p>Website Design</p>
                        </div>
                    </div>
                @endforelse
            </div>

        </div>
        
    </div>
</section>
@endsection

@section('scripts')
    {{-- @parent --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
<script src="{{asset('contactform/contactform.js')}}"></script>

@endsection