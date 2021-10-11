@extends('frontend.layouts.master')
@section('content')
@section('pageTitle',__('web.contact|'))

        <!-- Start Page Title Area -->
        <div class="page-title-area item-bg2 jarallax" style="background-image:url({{asset('frontend/assets/img/6.png')}})" data-jarallax='{"speed": 0.3}'>
            <div class="container">
                <div class="page-title-content">
                    <ul>
                        <li><a href="{{route('website')}}">{{__('web.home')}}</a></li>
                        <li>{{__('web.contact')}}</li>
                    </ul>
                    <h2 style="font-family: cairo;">{{__('web.contact')}}</h2>
                </div>
            </div>
        </div>
        <!-- End Page Title Area -->
        
        @if (session()->has('success'))
        <div class="alert alert-success">{{session()->get('success')}}</div>
        @endif


        @if (session()->has('error'))
            <div class="alert alert-danger">{{session()->get('error')}}</div>
        @endif
        <!-- Start Contact Info Area -->
        <section class="contact-info-area pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="contact-info-box mb-30">
                            <div class="icon">
                                <i class='bx bx-envelope'></i>
                            </div>

                            <h3 style="font-family: cairo;">{{__('web.email')}}</h3>
                            <p><a href="mailto:{{$setting->email}}">{{$setting->email}}</a></p>
                            <br>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="contact-info-box mb-30">
                            <div class="icon">
                                <i class='bx bx-map'></i>
                            </div>

                            <h3 style="font-family: cairo;">{{__('web.address')}}</h3>
                            <p style="font-family: cairo;"><a href="https://www.google.com/maps/place/%D9%85%D8%B9%D9%87%D8%AF+%D8%B5%D9%86%D8%A7%D8%B9+%D8%A7%D9%84%D8%AD%D9%84%D9%88%D9%84+%D9%84%D9%84%D8%AA%D8%AF%D8%B1%D9%8A%D8%A8%E2%80%AD/@24.7978229,46.655851,17z/data=!3m1!4b1!4m5!3m4!1s0x3e2ee3417708846b:0xc9f2ed488eae48b2!8m2!3d24.797818!4d46.6536623" target="_blank">{{$setting->address}}</a></p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-0 offset-md-3 offset-sm-3">
                        <div class="contact-info-box mb-30">
                            <div class="icon">
                                <i class='bx bx-phone-call'></i>
                            </div>
                            <h3 style="font-family: cairo;">{{__('web.phone')}}</h3>
                            <p><a href="{{$setting->phone}}">{{$setting->phone}}</a></p>
                            <br>
                        </div>
                    </div>
                </div>
            </div>

            <div id="particles-js-circle-bubble-2"></div>
        </section>
        <!-- End Contact Info Area -->

        <!-- Start Contact Area -->
        <section class="contact-area pb-100">
            <div class="container">
                <div class="section-title">
                    <span class="sub-title">{{__('web.contact')}}</span>
                    <h5 style="font-family: cairo;">{{__('web.drop')}}</h5>
                </div>
                <div class="contact-form">
                    {{-- {{route('contact.submit')}} --}}
                    <form id="contactForm" action="{{route('contact.submit')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <input type="text" name="name" id="name" class="form-control" placeholder="{{__('web.cname')}}" value="{{old('name')}}">
                                    @error('name')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <input type="email" name="email" id="email" class="form-control"  placeholder="{{__('web.cemail')}}"  value="{{old('email')}}">
                                    @error('email')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <input type="text" name="phone" id="phone"  class="form-control" placeholder="{{__('web.cphone')}}"  value="{{old('phone')}}">
                                    @error('phone')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <input type="text" name="subject" id="subject" class="form-control" placeholder="{{__('web.csubject')}}"  value="{{old('subject')}}">
                                    @error('subject')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <textarea name="message" class="form-control" id="message" cols="30" rows="5" placeholder="{{__('web.cmessage')}}">{{old('message')}}</textarea>
                                    @error('message')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <button type="submit" class="default-btn"><i class='bx bx-paper-plane icon-arrow before'></i><span class="label">{{__('web.send')}}</span><i class="bx bx-paper-plane icon-arrow after"></i></button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div id="particles-js-circle-bubble-3"></div>
            <div class="contact-bg-image"><img src="assets/img/map.png" alt="image"></div>
        </section>
        <!-- End Contact Area -->

        <!-- Maps -->
        <div id="map">
            <div style="width: 100%"><iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=8290%20King%20Abdul%20Aziz%20Rd,%20Ar%20Rabi,%20Riyadh%2013315,%20Saudi%20Arabia+(8290%20King%20Abdul%20Aziz%20Rd,%20Ar%20Rabi,%20Riyadh%2013315,%20Saudi%20Arabia)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
        </div>
        <!-- End Maps -->

@endsection