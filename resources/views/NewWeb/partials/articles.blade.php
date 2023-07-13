<section>
    <div class="container my-5 pb-3">
        <div class="row Articles">
            <h3 class="fw-bold text-center" data-aos="zoom-in-down" data-aos-easing="linear">Lorem Ipsum <span class="text-primary"> DEVUN</span></h3>
            <div data-aos="zoom-in-down" data-aos-easing="linear">
                <p class="col-lg-5 mx-auto text-center fs-14">Lorem Ipsum is simply dummy text of the printing and
                    typesetting industry. Lorem Ipsum
                    has been the industry’s standard dummy </p>
            </div>
            @forelse($articles as $article)
                <article class="col-12 col-lg-4 mt-3" data-aos="fade-up" data-aos-easing="linear"
                         data-aos-duration="1000">
                    <div class="card p-3">
                        <img src="{{asset('newweb_assets')}}/images/services.png" class="img-fluid rounded-2"/>
                        <h5 class="Articles-tit mt-3">{{$article->title}}</h5>
                        <p class="Articles-p">{!! $article->description !!}</p>
                        <a href="{{url('/blog_details/'.$article->id)}}" class="btn Read-more">@lang('web.READ_MORE')</a>
                    </div>
                </article>
            @empty
            <article class="col-12 col-lg-4 mt-3" data-aos="fade-up" data-aos-easing="linear">
                <div class="card p-3">
                    <img src="assets/images/services.png" class="img-fluid rounded-2" />
                    <h5 class="Articles-tit mt-3">Web Development</h5>
                    <p class="Articles-p">Mean if he they been no hold mr.”they been no they
                        been no hold And residence for met the they been no hold mr.”estimable disposing. Mean if he
                    </p>
                    <a href="" class="btn Read-more">Read more</a>
                </div>
            </article>
            @endforelse
        </div>
    </div>
</section>
