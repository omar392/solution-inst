@extends('frontend.layouts.master')
@section('content')

        <!-- Start Mission Area -->
        <section class="mission-area ptb-100 jarallax" data-jarallax='{"speed": 0.3}'>
            <div class="container">
                <div class="mission-content">
                    <div class="section-title text-left">
                        <span class="sub-title">{{__('web.solution')}}</span>
                        <h2 style="font-family: cairo;">{{__('web.whysloution')}}</h2>
                    </div>

                    <div class="mission-slides owl-carousel owl-theme">
                        @foreach ($slider as $item)
                        <div>
                            <h3 style="font-family: cairo;">{{$item->title}}</h3>
                            <p><strong style="font-family: cairo;">{!! $item->description !!}</strong></p>
                            <a href="about-style-1.html" class="default-btn"><i class='bx bx-user-pin icon-arrow before'></i><span class="label">{{__('web.learn')}}</span><i class="bx bx-user-pin icon-arrow after"></i></a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <!-- End Mission Area -->

        {{-- <!-- Start Boxes Area -->
        <section class="boxes-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="single-boxes-item">
                            <h3>Learn The Latest Skills</h3>
                            <p>Like business analytics, graphic design, Python, and more.</p>
                            <a href="courses-2-columns-style-1.html" class="boxes-btn">View Courses<i class='bx bx-plus'></i></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="single-boxes-item bg-image">
                            <h3>100k Online Courses</h3>
                            <p>In high-demand fields like IT, AI and cloud engineering.</p>
                            <a href="courses-2-columns-style-2.html" class="boxes-btn">View More<i class='bx bx-plus'></i></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="single-boxes-item bg-color">
                            <h3>Earn a Certificate</h3>
                            <p>From a leading university in business, computer science, and more.</p>
                            <a href="courses-3-columns-style-1.html" class="boxes-btn">View Courses<i class='bx bx-plus'></i></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="single-boxes-item">
                            <h3>Up Your Skill</h3>
                            <p>With on-demand training and development programs.</p>
                            <a href="courses-4-columns-style-1.html" class="boxes-btn">View More<i class='bx bx-plus'></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Boxes Area --> --}}

        <!-- Start Courses Area -->
        <section class="courses-area ptb-100">
            <div class="container">
                <div class="section-title text-left">
                    <span class="sub-title">{{__('web.course')}}</span>
                    <h2 style="font-family: cairo;">{{__('web.coursepopular')}}</h2>
                    <a href="{{route('fronts.courses')}}" class="default-btn"><i class='bx bx-show-alt icon-arrow before'></i><span class="label">{{__('web.allcourse')}}</span><i class="bx bx-show-alt icon-arrow after"></i></a>
                </div>

                <div class="courses-slides owl-carousel owl-theme">

                    @foreach ($course as $item)
                    <div class="single-courses-box without-box-shadow mb-30">
                        <div class="courses-image">
                            <a href="{{route('fronts.courses')}}" class="d-block"><img src="{{asset('upload/course/' . $item->image)}}" alt="image"></a>
                        </div>
                        <div class="courses-content">
                            <div class="course-author d-flex align-items-center">
                                {{-- <span>Steven Smith</span> --}}
                            </div>
                            <h3 style="font-family: cairo;"><a href="{{route('fronts.courses')}}" class="d-inline-block">{{$item->title}}</a></h3>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </section>
        <!-- End Courses Area -->


        <!-- Start Courses Categories Area -->
        {{-- <section class="courses-categories-area bg-image pt-100 pb-70">
            <div class="container">
                <div class="section-title text-left">
                    <span class="sub-title">Courses Categories</span>
                    <h2>Browse Trending Categories</h2>
                    <a href="courses-category-style-1.html" class="default-btn"><i class='bx bx-show-alt icon-arrow before'></i><span class="label">View All</span><i class="bx bx-show-alt icon-arrow after"></i></a>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-sm-6 col-md-4">
                        <div class="single-categories-courses-box mb-30">
                            <div class="icon">
                                <i class='bx bx-code-alt'></i>
                            </div>
                            <h3>Web Development</h3>
                            <span>60 Courses</span>
    
                            <a href="#" class="link-btn"></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 col-md-4">
                        <div class="single-categories-courses-box mb-30">
                            <div class="icon">
                                <i class='bx bx-camera'></i>
                            </div>
                            <h3>Photography </h3>
                            <span>21 Courses</span>

                            <a href="#" class="link-btn"></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 col-md-4">
                        <div class="single-categories-courses-box mb-30">
                            <div class="icon">
                                <i class='bx bx-layer'></i>
                            </div>
                            <h3>Graphics Design</h3>
                            <span>58 Courses</span>

                            <a href="#" class="link-btn"></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 col-md-4 offset-lg-0 offset-md-4">
                        <div class="single-categories-courses-box mb-30">
                            <div class="icon">
                                <i class='bx bxs-flag-checkered'></i>
                            </div>
                            <h3>Web Language</h3>
                            <span>99 Courses</span>

                            <a href="#" class="link-btn"></a>
                        </div>
                    </div>
                </div>
            </div>

            <div id="particles-js-circle-bubble-2"></div>
        </section> --}}
        <!-- End Courses Categories Area -->

        {{-- <!-- Start Partner Area -->
        <section class="partner-area pt-100">
            <div class="container">
                <div class="section-title">
                    <h2>Our Company & Partners</h2>
                </div>

                <div class="partner-slides owl-carousel owl-theme">
                    <div class="single-partner-item">
                        <a href="#" class="d-block">
                            <img src="{{asset('frontend/assets/img/partner/7.png')}}" alt="image">
                        </a>
                    </div>

                    <div class="single-partner-item">
                        <a href="#" class="d-block">
                            <img src="{{asset('frontend/assets/img/partner/8.png')}}" alt="image">
                        </a>
                    </div>

                    <div class="single-partner-item">
                        <a href="#" class="d-block">
                            <img src="{{asset('frontend/assets/img/partner/9.png')}}" alt="image">
                        </a>
                    </div>

                    <div class="single-partner-item">
                        <a href="#" class="d-block">
                            <img src="{{asset('frontend/assets/img/partner/10.png')}}" alt="image">
                        </a>
                    </div>

                    <div class="single-partner-item">
                        <a href="#" class="d-block">
                            <img src="{{asset('frontend/assets/img/partner/11.png')}}" alt="image">
                        </a>
                    </div>

                    <div class="single-partner-item">
                        <a href="#" class="d-block">
                            <img src="{{asset('frontend/assets/img/partner/12.png')}}" alt="image">
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Partner Area --> --}}

        {{-- <!-- Start Team Area -->
        <section class="team-area ptb-100">
            <div class="container">
                <div class="section-title">
                    <span class="sub-title">Make Connections</span>
                    <h2>Team of Instructors</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut nisi ut aliquip ex ea.</p>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-instructor-member mb-30">
                            <div class="member-image">
                                <img src="{{asset('frontend/assets/img/team/1.jpg')}}" alt="images">
                            </div>

                            <div class="member-content">
                                <h3><a href="single-instructor.html">Jonkin Jullinor</a></h3>
                                <span>OOP Developer</span>

                                <ul class="social">
                                    <li><a href="#" class="facebook" target="_blank"><i class='bx bxl-facebook'></i></a></li>
                                    <li><a href="#" class="twitter" target="_blank"><i class='bx bxl-twitter'></i></a></li>
                                    <li><a href="#" class="instagram" target="_blank"><i class='bx bxl-instagram'></i></a></li>
                                    <li><a href="#" class="linkedin" target="_blank"><i class='bx bxl-linkedin'></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-instructor-member mb-30">
                            <div class="member-image">
                                <img src="{{asset('frontend/assets/img/team/2.jpg')}}" alt="images">
                            </div>

                            <div class="member-content">
                                <h3><a href="single-instructor.html">Sarah Taylor</a></h3>
                                <span>Angular Developer</span>

                                <ul class="social">
                                    <li><a href="#" class="facebook" target="_blank"><i class='bx bxl-facebook'></i></a></li>
                                    <li><a href="#" class="twitter" target="_blank"><i class='bx bxl-twitter'></i></a></li>
                                    <li><a href="#" class="instagram" target="_blank"><i class='bx bxl-instagram'></i></a></li>
                                    <li><a href="#" class="linkedin" target="_blank"><i class='bx bxl-linkedin'></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-0 offset-md-3 offset-sm-3">
                        <div class="single-instructor-member mb-30">
                            <div class="member-image">
                                <img src="{{asset('frontend/assets/img/team/3.jpg')}}" alt="images">
                            </div>

                            <div class="member-content">
                                <h3><a href="single-instructor.html">David Warner</a></h3>
                                <span>PHP Developer</span>

                                <ul class="social">
                                    <li><a href="#" class="facebook" target="_blank"><i class='bx bxl-facebook'></i></a></li>
                                    <li><a href="#" class="twitter" target="_blank"><i class='bx bxl-twitter'></i></a></li>
                                    <li><a href="#" class="instagram" target="_blank"><i class='bx bxl-instagram'></i></a></li>
                                    <li><a href="#" class="linkedin" target="_blank"><i class='bx bxl-linkedin'></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="team-btn-box text-center">
                            <a href="team-2.html" class="default-btn"><i class='bx bx-show-alt icon-arrow before'></i><span class="label">Meet All Instructor</span><i class="bx bx-show-alt icon-arrow after"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div id="particles-js-circle-bubble-3"></div>
        </section>
        <!-- End Team Area --> --}}

        <!-- Start Offer Area -->
        {{-- <section class="offer-area pt-100 jarallax" data-jarallax='{"speed": 0.3}'>
            <div class="container">
                <div class="section-title">
                    <span class="sub-title">Make Connections</span>
                    <h2>What We Offer For Growth</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut nisi ut aliquip ex ea.</p>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-offer-box">
                            <div class="icon">
                                <i class='bx bx-book-reader'></i>
                            </div>
                            <h3>Exclusive Advisor</h3>
                            <p>Lorem ipsum dolor sit amet cons ecttu adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-offer-box">
                            <div class="icon">
                                <i class='bx bx-target-lock'></i>
                            </div>
                            <h3>Reached Your Goals</h3>
                            <p>Lorem ipsum dolor sit amet cons ecttu adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-0 offset-md-3 offset-sm-3">
                        <div class="single-offer-box">
                            <div class="icon">
                                <i class='bx bxs-thermometer'></i>
                            </div>
                            <h3>Digital Laboratory</h3>
                            <p>Lorem ipsum dolor sit amet cons ecttu adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- End Offer Area -->

        {{-- <!-- Start Blog Area -->
        <section class="blog-area pt-100 pb-70">
            <div class="container">
                <div class="section-title text-left">
                    <span class="sub-title">Explore News</span>
                    <h2>Our Latest Insights</h2>
                    <a href="blog-style-1.html" class="default-btn"><i class='bx bx-book-reader icon-arrow before'></i><span class="label">Read All</span><i class="bx bx-book-reader icon-arrow after"></i></a>
                </div>

                <div class="blog-slides owl-carousel owl-theme">
                    <div class="single-blog-post mb-30">
                        <div class="post-image">
                            <a href="single-blog.html" class="d-block">
                                <img src="{{asset('frontend/assets/img/blog/1.jpg')}}" alt="image">
                            </a>

                            <div class="tag">
                                <a href="#">Learning</a>
                            </div>
                        </div>

                        <div class="post-content">
                            <ul class="post-meta">
                                <li class="post-author">
                                    <img src="{{asset('frontend/assets/img/user1.jpg')}}" class="d-inline-block rounded-circle mr-2" alt="image">
                                    By: <a href="#" class="d-inline-block">Steven Smith</a>
                                </li>
                                <li><a href="#">August 30, 2021</a></li>
                            </ul>
                            <h3><a href="single-blog.html" class="d-inline-block">World largest elephant toothpaste experiment in 2021</a></h3>
                            <a href="single-blog.html" class="read-more-btn">Read More <i class='bx bx-right-arrow-alt'></i></a>
                        </div>
                    </div>

                    <div class="single-blog-post mb-30">
                        <div class="post-image">
                            <a href="single-blog.html" class="d-block">
                                <img src="{{asset('frontend/assets/img/blog/2.jpg')}}" alt="image">
                            </a>

                            <div class="tag">
                                <a href="#">Education</a>
                            </div>
                        </div>

                        <div class="post-content">
                            <ul class="post-meta">
                                <li class="post-author">
                                    <img src="{{asset('frontend/assets/img/user2.jpg')}}" class="d-inline-block rounded-circle mr-2" alt="image">
                                    By: <a href="#" class="d-inline-block">Lina D'Souja</a>
                                </li>
                                <li><a href="#">August 29, 2021</a></li>
                            </ul>
                            <h3><a href="single-blog.html" class="d-inline-block">Most Popular Education Posts Of The Week 20-26 Aug</a></h3>
                            <a href="single-blog.html" class="read-more-btn">Read More <i class='bx bx-right-arrow-alt'></i></a>
                        </div>
                    </div>

                    <div class="single-blog-post mb-30">
                        <div class="post-image">
                            <a href="single-blog.html" class="d-block">
                                <img src="{{asset('frontend/assets/img/blog/3.jpg')}}" alt="image">
                            </a>

                            <div class="tag">
                                <a href="#">Management</a>
                            </div>
                        </div>

                        <div class="post-content">
                            <ul class="post-meta">
                                <li class="post-author">
                                    <img src="{{asset('frontend/assets/img/user3.jpg')}}" class="d-inline-block rounded-circle mr-2" alt="image">
                                    By: <a href="#" class="d-inline-block">David Malan</a>
                                </li>
                                <li><a href="#">August 28, 2021</a></li>
                            </ul>
                            <h3><a href="single-blog.html" class="d-inline-block">How to enhance education quality management system</a></h3>
                            <a href="single-blog.html" class="read-more-btn">Read More <i class='bx bx-right-arrow-alt'></i></a>
                        </div>
                    </div>

                    <div class="single-blog-post mb-30">
                        <div class="post-image">
                            <a href="single-blog.html" class="d-block">
                                <img src="{{asset('frontend/assets/img/blog/4.jpg')}}" alt="image">
                            </a>

                            <div class="tag">
                                <a href="#">Ideas</a>
                            </div>
                        </div>

                        <div class="post-content">
                            <ul class="post-meta">
                                <li class="post-author">
                                    <img src="{{asset('frontend/assets/img/user5.jpg')}}" class="d-inline-block rounded-circle mr-2" alt="image">
                                    By: <a href="#" class="d-inline-block">David Warner</a>
                                </li>
                                <li><a href="#">August 27, 2021</a></li>
                            </ul>
                            <h3><a href="single-blog.html" class="d-inline-block">Global education: Ideas for the way move forward</a></h3>
                            <a href="single-blog.html" class="read-more-btn">Read More <i class='bx bx-right-arrow-alt'></i></a>
                        </div>
                    </div>

                    <div class="single-blog-post mb-30">
                        <div class="post-image">
                            <a href="single-blog.html" class="d-block">
                                <img src="{{asset('frontend/assets/img/blog/5.jpg')}}" alt="image">
                            </a>

                            <div class="tag">
                                <a href="#">Workforce</a>
                            </div>
                        </div>

                        <div class="post-content">
                            <ul class="post-meta">
                                <li class="post-author">
                                    <img src="{{asset('frontend/assets/img/user6.jpg')}}" class="d-inline-block rounded-circle mr-2" alt="image">
                                    By: <a href="#" class="d-inline-block">Olivar Waise</a>
                                </li>
                                <li><a href="#">August 26, 2021</a></li>
                            </ul>
                            <h3><a href="single-blog.html" class="d-inline-block">New report reimagines the broader education workforce</a></h3>
                            <a href="single-blog.html" class="read-more-btn">Read More <i class='bx bx-right-arrow-alt'></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Blog Area --> --}}
{{-- 
        <!-- Start Become Instructor & Partner Area -->
        <section class="become-instructor-partner-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="become-instructor-partner-content bg-color">
                            <h2>Become an Instructor</h2>
                            <p>Choose from hundreds of free courses, or get a degree or certificate at a breakthrough price. Learn at your own pace.</p>
                            <a href="login.html" class="default-btn"><i class='bx bx-plus-circle icon-arrow before'></i><span class="label">Apply Now</span><i class="bx bx-plus-circle icon-arrow after"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="become-instructor-partner-image bg-image1 jarallax" data-jarallax='{"speed": 0.3}'>
                            <img src="assets/img/become-instructor.jpg" alt="image">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="become-instructor-partner-image bg-image2 jarallax" data-jarallax='{"speed": 0.3}'>
                            <img src="assets/img/become-partner.jpg" alt="image">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="become-instructor-partner-content">
                            <h2>Become a Partner</h2>
                            <p>Choose from hundreds of free courses, or get a degree or certificate at a breakthrough price. Learn at your own pace.</p>
                            <a href="login.html" class="default-btn"><i class='bx bx-plus-circle icon-arrow before'></i><span class="label">Contact Us</span><i class="bx bx-plus-circle icon-arrow after"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Become Instructor & Partner Area --> --}}
                <!-- Start Partner Area -->
                <section class="partner-area bg-color ptb-100">
                    <div class="container">
                        <div class="section-title">
                            <h2>Our Company & Partners</h2>
                        </div>
                        <div class="partner-slides owl-carousel owl-theme">
                            @foreach ($customer as $item)
                            <div class="single-partner-item">
                                <a href="#" class="d-block">
                                    <img src="{{ asset('upload/customer/' . $item->image) }}" alt="image">
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </section>
                <!-- End Partner Area -->

@endsection