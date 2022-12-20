<!-- Google Map start-->
<div id="atf-map-area">
{{--    <iframe style="border:0"--}}
{{--        src="https://maps.google.com/maps?width=100%25&amp;hl=en&amp;q=1%20Grafton%20Street,%20Dublin,%20Ireland+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"--}}
{{--        allowfullscreen=""></iframe>--}}
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3624.9885397503363!2d46.62964721499956!3d24.692920684133203!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf9445380b3855035!2zMjTCsDQxJzM0LjUiTiA0NsKwMzcnNTQuNiJF!5e0!3m2!1sen!2ssa!4v1671451064095!5m2!1sen!2ssa" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <div class="content-form">
        <h3>{{$section->title}}</h3>
        <p>{!!$section->description!!}
            {{-- <a href="#" class="our-link">{{$setting->email}}</a> --}}
         </p>
        <form id="contactForm" class="atf-contact-form form contactForm" method="POST" action="{{URL('save')}}">
            @csrf
            <div class="row">
                <div class="form-group col-sm-6 col-md-6">
                    <input type="text" name="name" class="form-control" id="name" placeholder="@lang('web.name')"
                        required="required">
                </div>
                <div class="form-group col-sm-6 col-md-6">
                    <input type="text" name="phone" class="form-control" id="name" placeholder="@lang('web.phone')"
                        required="required">
                </div>
                <div class="form-group col-md-12">
                    <input type="email" name="email" class="form-control" id="form_email"
                        placeholder="@lang('web.email')" required="required">
                </div>
                <div class="form-group col-md-12">
                    <input type="text" name="subject" class="form-control" id="subject"
                        placeholder="@lang('web.subject')" required="required">
                </div>
                <div class="form-group col-md-12">
                    <textarea rows="6" name="message" class="form-control" id="message"
                        placeholder="@lang('web.message')" required="required"></textarea>
                </div>
                  <div class="col-md-12 my-3">
                      <div class="mb-3">
                        <div class="errormessage" id="errormessage"></div>
                        <div class="sendmessage" id="sendmessage">@lang('web.success-send')</div>
                      </div>
                    </div>
                <div class="col-md-12">
                    <div class="actions text-left">
                        <button type="submit" value="Submit Now" name="submit" id="submitButton"
                            class="atf-themes-btn"
                            title="Submit Your Message!"><span></span><span></span><span></span><span></span>@lang('web.send')</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- Google Map end -->
