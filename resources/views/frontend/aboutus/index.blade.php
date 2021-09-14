@extends('frontend.layouts.master')
@section('content')

        <!-- Start Page Title Area -->
        <div class="page-title-area item-bg2 jarallax" data-jarallax='{"speed": 0.3}'>
            <div class="container">
                <div class="page-title-content">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li>About Us</li>
                    </ul>
                    <h2>About Us</h2>
                </div>
            </div>
        </div>
        <!-- End Page Title Area -->

                <!-- Start About Area -->
                <section class="about-area ptb-100">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-12">
                                <div class="about-image">
                                    <img src="{{asset('frontend/assets/img/about/1.jpg')}}" class="shadow" alt="image">
                                    <img src="{{asset('frontend/assets/img/about/2.jpg')}}" class="shadow" alt="image">
                                </div>
                            </div>
        
                            <div class="col-lg-6 col-md-12">
                                <div class="about-content">
                                    <span class="sub-title">About Us</span>
                                    <h6>We can support student forum 24/7 for national and international students.</h6>
                                    <p style="font-family: cairo;">{{$aboutus->about}}</p>
                                </div>
                            </div>
                        </div>
        
                        <div class="about-inner-area">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="about-text">
                                        <h3>Mission</h3>
                                        <p style="font-family: cairo;">{{$aboutus->mission}}</p>
                                    </div>
                                </div>
        
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="about-text">
                                        <h3>Vision</h3>
                                        <p style="font-family: cairo;">{{$aboutus->vision}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End About Area -->

                <!-- Start Team Area -->
        <section class="team-area pb-100">
            <div class="container">
                <div class="section-title">
                    <span class="sub-title">Make Connections</span>
                    <h2>Our Team</h2>
                </div>

                <div class="row">

                @foreach ($team as $item)
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-instructor-member mb-30">
                        <div class="member-image">
                            <img src="{{ asset('upload/team/' . $item->image) }}" alt="images">
                        </div>
                        <div class="member-content">
                            <h3 style="font-family: cairo;">{{$item->name}}</h3>
                            <span>{{$item->job}}</span>
                        </div>
                    </div>
                </div>
                @endforeach
                    
                    {{-- <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="team-btn-box text-center">
                            <a href="team-1.html" class="default-btn"><i class='bx bx-show-alt icon-arrow before'></i><span class="label">Meet All Instructor</span><i class="bx bx-show-alt icon-arrow after"></i></a>
                        </div>
                    </div> --}}
                </div>
            </div>

            <div id="particles-js-circle-bubble-3"></div>
        </section>
        <!-- End Team Area -->

@endsection