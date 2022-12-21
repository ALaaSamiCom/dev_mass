	<!---------------------------How devUn works start-------------------------------->
    <section id="step-steps" class="atf-feature-area atf-section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-xl-6">
                    <div class="atf-section-title text-center wow fadeInUp" data-wow-duration="1s"
                        data-wow-delay="0.3s" data-wow-offset="0"
                        style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInUp;">
                        <h5 class="atf-sheading">{!!$section->description!!}</h5>
                        <h2>{{$section->title}}</h2>
                        <div class="atf-sec_icon my-3"><span></span><span
                                class="atf-sec_radius"></span><span></span></div>
                    </div>
                </div>
                <!--- END COL -->
            </div>
            <!--- END ROW -->
            <!--Start Row-->
            <div class="step-container">
                <div class="stepwizard col-md-offset-3">
                    <div class="stepwizard-row setup-panel">
                        @forelse ($steps as $step)
                        <div class="stepwizard-step">
                            {{-- btn btn-circle btn-default btn-primary --}}
                            <a href="#step-{{$step->id}}" type="button" class="btn btn-circle btn-default @if ($step->id == '1')
                                btn-primary
                            @endif ">{{$step->title}}</a>
                            <!--<p>Analysis & Pricing</p>-->
                        </div>
                       @empty
                       <div class="stepwizard-step">
                        <a href="#step-1" type="button" class="btn btn-primary btn-circle">Analysis &
                            Pricing</a>
                        <!--<p>Analysis & Pricing</p>-->
                    </div>
              
                       @endforelse
                    </div>
                </div>

                <div class="steps">
                    @forelse ($items as $item)
                    <div class="row setup-content" id="step-{{$item->step_item->id}}">
                        <div class="col-xs-6 col-sm-6 col-md-6  col-lg-5 col-md-offset-3">
                            <div class="iamge">
                                <img src="{{$item->image->geturl()}}" width="100%">
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6  col-lg-7 col-md-offset-3">
                            <h3>{{$item->title}}</h3>
                            <p>{!! $item->description !!}</p>

                            @if($item->step_item->id !== 1)
                            <button class="btn btn-primary prevBtn btn-lg pull-left" type="button">@lang('web.Back')</button>
                            @endif

                            @if($item->step_item->id !== 4)
                            <button class="btn btn-primary nextBtn btn-lg pull-right" type="button"
                                id="next">@lang('web.Continue')</button>
                             @endif

                            <div class="clearfix"></div>
                        </div>
                    </div>

                    @empty
                          <!---------------------------------------------------------------------------->
                          <div class="row setup-content" id="step-2">
                            <div class="col-xs-6 col-sm-6 col-md-6  col-lg-5 col-md-offset-3">
                                <div class="iamge">
                                    <img src="assets/img/Contracting.png" width="100%">
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6  col-lg-7 col-md-offset-3">
                                <h3>Contracting& Planning</h3>
                                <p>As soon as you communicate with us, a meeting is scheduled to clearly understand your
                                    requirements under the supervision of the technical director. Also, during the
                                    meeting, a manager of your project is appointed to assume all the tasks of your
                                    project, including the preparation of its tasks.</p>
    
                                <button class="btn btn-primary prevBtn btn-lg pull-left" type="button">Back</button>
                                <button class="btn btn-primary nextBtn btn-lg pull-right"
                                    type="button">Continue</button>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="row setup-content" id="step-3">
                            <div class="col-xs-6 col-sm-6 col-md-6  col-lg-5 col-md-offset-3">
                                <div class="iamge">
                                    <img src="assets/img/Develpoment.png" width="100%">
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6  col-lg-7 col-md-offset-3">
                                <h3>Development</h3>
                                <p>As soon as you communicate with us, a meeting is scheduled to clearly understand your
                                    requirements under the supervision of the technical director. Also, during the
                                    meeting, a manager of your project is appointed to assume all the tasks of your
                                    project, including the preparation of its tasks.</p>
    
                                <button class="btn btn-primary prevBtn btn-lg pull-left" type="button">Back</button>
                                <button class="btn btn-primary nextBtn btn-lg pull-right"
                                    type="button">Continue</button>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    @endforelse
                
              
                </div>

            </div>
            <!--End Row-->
        </div>
    </section>
    <!---------------------------How devUn works End---------------------------------->