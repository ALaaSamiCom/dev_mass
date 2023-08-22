<!-- START HOME -->
{{--@dd($article)--}}
<section>
    <div class="bg-sec-img">
        <div class="d-flex align-items-center h-100 w-100 py-5 bg-img-container">
            <div class="container text-center mt-5" data-aos="zoom-in-down" data-aos-easing="linear">
                <h2 class="text-white">{{$article->title}}</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item text-white"><a class="text-white text-decoration-none"
                                                                  href="{{url('/blog')}}">@lang('web.BLOG')</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">{{$article->title}}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- END HOME -->