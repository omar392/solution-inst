@extends('frontend.layouts.master')
@section('content')
@section('pageTitle',__('web.employment|'))


    <!-- Start Page Title Area -->
    <div class="page-title-area item-bg2 jarallax" style="background-image:url({{asset('frontend/assets/img/emplo.png')}})" data-jarallax='{"speed": 0.3}'>
        <div class="container">
            <div class="page-title-content">
                <ul>
                    <li><a href="{{route('website')}}">{{__('web.home')}}</a></li>
                    <li>{{__('web.employment')}}</li>
                </ul>
                <h2 style="font-family: cairo;">{{__('web.apply')}}</h2>
            </div>
        </div>
    </div>
    <br><br>
    <!-- End Page Title Area -->

            <!-- Start Contact Area -->
            <section class="contact-area pb-100">
                <div class="container">
                    <div class="section-title">
                        {{-- <span class="sub-title">Contact Us</span> --}}
                        <h2 style="font-family: cairo;">{{__('web.apply')}}</h2>
                        {{-- <p>incididunt ut labore et dolore magna aliqua.</p> --}}
                    </div>

                    <div class="contact-form">
                        <form id="contactForm" method="POST" action="{{route('save.subscribe')}}" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <input type="text" name="name" id="name" class="form-control" required placeholder="{{__('web.cname')}}">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" class="form-control" required placeholder="{{__('web.cemail')}}">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <input type="text" name="phone" id="phone_number" required class="form-control" placeholder="{{__('web.cphone')}}">
                                        
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <input type="text" name="address" id="address" class="form-control" required  placeholder="{{__('web.address')}}">
                                        
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <input type="text" name="special" id="special" class="form-control" required  placeholder="{{__('web.special')}}">
                                        
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-12">
                                    <input type="file" id="real-file" name="file" hidden="hidden" required />
                                    <button type="button" id="custom-button">{{__('web.upload')}}</button>
                                    <span id="custom-text">No file chosen, yet.</span>
                                    </div>

                                <div class="col-lg-6 col-md-12">
                                    <label class="input-preview" for="img" style="font-family: cairo;">Image</label>
                                    <div class="col-sm-10">
                                        <input class="input-preview__src" id="img" name="image" type="file"  required />
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

    @endsection