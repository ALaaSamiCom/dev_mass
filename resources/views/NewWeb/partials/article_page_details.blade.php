<!-- START HOME -->
<section>
    <div class="container mt-5">
        <div class="row text-center mb-4">
            <h3 class="fw-bold">{{$article->title}} <span class="text-primary">New Blog </span></h3>
            <p>{{$article->created_at}} | 4 min read</p>
        </div>
        <div class="d-flex align-items-center justify-content-between mb-3">
            <div class="d-flex align-items-center mb-3">
                <img src="{{asset('newweb_assets')}}/images/project1.png" width="60" class="rounded-circle">
                <div class="mx-3">
                    <h6 class="fw-bold">{!! $article->author_name !!}</h6>
                    <p class="m-0 fs-14 revew">{!! $article->author_job !!}</p>
                </div>
            </div>
            <div class="d-flex Share-Blog  align-items-center">
                <div class="px-3 fw-bold">@lang('web.SHARE')</div>
                <a><i class="fa-brands fa-linkedin-in"></i></a>
                <a><i class="fa-brands fa-twitter"></i></a>
                <a><i class="fa-brands fa-instagram"></i></a>
                <a><i class="fa-brands fa-facebook-f"></i></a>
            </div>
        </div>

        <img src="{{asset('newweb_assets')}}/images/services.png" class="img-fluid w-100 mb-4 Blog-img"/>
        <div class="col-10 mx-auto">
            <p class="mb-5">
                {!! $article->description !!}
               </p>
{{--            <h6 class="fw-normal mb-4">Devun is not just a technical solutions company. We</h6>--}}
{{--            <div class="fw-bold border-right mb-5">--}}
{{--                Devun is not just a technical solutions company. We understand your desires and needs, so we put in--}}
{{--                your hands ideal ideas that exceeds your imagination and keeps you out of the box ideas down to the--}}
{{--                small details. We dive deep into the Devun is not just a technical solutions company. We understand--}}
{{--            </div>--}}
{{--            <p class="mb-5">--}}
{{--                Devun is not just a technical solutions company. We understand your desires and needs, so we put in--}}
{{--                your Devun is not just a technical solutions company. We understand your desires and needs, so we--}}
{{--                put in your Devun is not just a technical solutions company. We understand your desires and needs,--}}
{{--                so we put in your--}}
{{--            </p>--}}
        </div>
    </div>
</section>

<!-- END HOME -->
