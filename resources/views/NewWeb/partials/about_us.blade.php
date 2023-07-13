<!--START About Us-->
<article>
    <div class="container position-relative my-5 pt-3">
        <div class="row justify-content-between align-items-center ">
            <div class="position-absolute z-index end-0 top-0">
                <svg xmlns="http://www.w3.org/2000/svg" width="68.93" height="69.325" viewBox="0 0 68.93 69.325">
                    <path id="Polygon_2" data-name="Polygon 2"
                          d="M22.863,4.86a3,3,0,0,1,5.274,0L48.6,42.569A3,3,0,0,1,45.959,47H5.041A3,3,0,0,1,2.4,42.569Z"
                          transform="translate(35.471) rotate(49)" fill="#246196" opacity="0.26"></path>
                </svg>
            </div>
            <div class="position-absolute z-index end-0 px-5 mx-5" style="top: 30%;">
                <svg class="mx-5" xmlns="http://www.w3.org/2000/svg" width="57.694" height="57.695" viewBox="0 0 57.694 57.695">
                    <rect id="Rectangle_17228" data-name="Rectangle 17228" width="44" height="44" rx="14"
                          transform="matrix(0.921, -0.391, 0.391, 0.921, 0, 17.192)" fill="#28649b" opacity="0.14">
                    </rect>
                </svg>
            </div>
            <div class="col-12 col-lg-5" data-aos="zoom-up-down" data-aos-easing="linear">
                <h2 class="text-primary">{{$section->title}}</h2>
                <p>
                    {!! $section->description !!}
                </p>
            </div>
            <div class="col-12 col-lg-6" data-aos="zoom-in-down" data-aos-easing="linear">
                <img src="{{asset('newweb_assets')}}/images/Services.png" class="img-fluid rounded-3 shadow" />
            </div>
        </div>
    </div>
</article><!--End About Us-->
