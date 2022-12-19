<!-- Google Map start-->
<div id="atf-map-area">
    <iframe style="border:0"
        src="https://maps.google.com/maps?width=100%25&amp;hl=en&amp;q=1%20Grafton%20Street,%20Dublin,%20Ireland+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"
        allowfullscreen=""></iframe>
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
