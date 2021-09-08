@extends('frontend.layouts.master')
@section('content')

        <!-- Start Page Title Area -->
        <div class="page-title-area item-bg2 jarallax" data-jarallax='{"speed": 0.3}'>
            <div class="container">
                <div class="page-title-content">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li>Contact</li>
                    </ul>
                    <h2>Contact Us</h2>
                </div>
            </div>
        </div>
        <!-- End Page Title Area -->

        <!-- Start Contact Info Area -->
        <section class="contact-info-area pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="contact-info-box mb-30">
                            <div class="icon">
                                <i class='bx bx-envelope'></i>
                            </div>

                            <h3>Email Here</h3>
                            <p><a href="mailto:hello@raque.com">hello@raque.com</a></p>
                            <p><a href="mailto:raque@hello.com">raque@hello.com</a></p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="contact-info-box mb-30">
                            <div class="icon">
                                <i class='bx bx-map'></i>
                            </div>

                            <h3>Location Here</h3>
                            <p><a href="https://goo.gl/maps/Mii9keyeqXeNH4347" target="_blank">2750 Quadra Street Victoria Road, New York, USA</a></p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-0 offset-md-3 offset-sm-3">
                        <div class="contact-info-box mb-30">
                            <div class="icon">
                                <i class='bx bx-phone-call'></i>
                            </div>

                            <h3>Call Here</h3>
                            <p><a href="tel:1234567890">+123 456 7890</a></p>
                            <p><a href="tel:2414524526">+241 452 4526</a></p>
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
                    <span class="sub-title">Contact Us</span>
                    <h2>Drop us Message for any Query</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                
                    @if (session()->has('success'))
                        <div class="alert alert-success">{{session()->get('success')}}</div>
                    @endif
                
                
                    @if (session()->has('error'))
                        <div class="alert alert-danger">{{session()->get('error')}}</div>
                    @endif
                
                <div class="contact-form">
                    {{-- {{route('contact.submit')}} --}}
                    <form id="contactForm" action="" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Your Name" required value="{{old('name')}}">
                                    @error('name')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Your Email" required value="{{old('email')}}">
                                    @error('email')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <input type="text" name="phone" id="phone" required data-error="Please enter your number" class="form-control" placeholder="Your Phone" required value="{{old('phonr')}}">
                                    @error('phone')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <input type="text" name="subject" id="subject" class="form-control" required data-error="Please enter your subject" placeholder="Your Subject" required value="{{old('subject')}}">
                                    @error('subject')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <textarea name="message" class="form-control" id="message" cols="30" rows="5" required data-error="Write your message" placeholder="Your Message" required>{{old('message')}}</textarea>
                                    @error('message')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <button type="submit" class="default-btn"><i class='bx bx-paper-plane icon-arrow before'></i><span class="label">Send Message</span><i class="bx bx-paper-plane icon-arrow after"></i></button>
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
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d359536.14502592356!2d-76.08043413946686!3d45.25029749557496!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cce04ff4fe494ef%3A0x26bb54f60c29f6e!2sParliament%20Hill!5e0!3m2!1sen!2sbd!4v1593691677634!5m2!1sen!2sbd"></iframe>
        </div>
        <!-- End Maps -->

@endsection