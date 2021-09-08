@extends('frontend.layouts.master')
@section('content')

    <!-- Start Page Title Area -->
    <div class="page-title-area item-bg2 jarallax" data-jarallax='{"speed": 0.3}'>
        <div class="container">
            <div class="page-title-content">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li>Courses</li>
                </ul>
                <h2>Courses</h2>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

        <!-- Start Courses Details Area -->
        <section class="courses-details-area pt-100 pb-70">
            <div class="container">
                <div class="courses-details-header">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <div class="courses-title">
                                <h2 style="font-family: cairo;">{{$course->title}}</h2>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="courses-price">
                                <a href="{{$course->course_link}}" target="_blank" class="default-btn"><i class='bx bx-paper-plane icon-arrow before'></i><span class="label">Subscribe Now</span><i class="bx bx-paper-plane icon-arrow after"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-8">
                        <div class="courses-details-image text-center">
                            <img src="{{ asset('upload/course/' . $course->image) }}" alt="image">
                        </div>

                        <div class="courses-details-desc">
                            <h3 style="font-family: cairo;">Description</h3>
                            <p><strong style="font-family: cairo;">{!! $course->description !!}</strong></p>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="courses-sidebar-information">
                            <ul>
                                <li>
                                    <span><i class='bx bx-group'></i> Students:</span>
                                    10
                                </li>
                                <li>
                                    <span><i class='bx bx-time'></i> Length:</span>
                                    1 Weeks
                                </li>
                                <li>
                                    <span><i class='bx bx-tachometer'></i> Effort:</span>
                                    2–5 hours per week
                                </li>
                                <li>
                                    <span><i class='bx bxs-institution'></i> Institution:</span>
                                    <a href="#" class="d-inline-block">ABC</a>
                                </li>
                                <li>
                                    <span><i class='bx bxs-graduation'></i> Subject:</span>
                                    Design
                                </li>
                                <li>
                                    <span><i class='bx bx-atom'></i> Quizzes:</span>
                                    Yes
                                </li>
                                <li>
                                    <span><i class='bx bxs-badge-check'></i> Level:</span>
                                    Introductory
                                </li>
                                <li>
                                    <span><i class='bx bx-support'></i> Language:</span>
                                    English
                                </li>
                                <li>
                                    <span><i class='bx bx-text'></i> Video Subtitle:</span>
                                    English
                                </li>
                                <li>
                                    <span><i class='bx bx-certification'></i> Certificate:</span>
                                    Yes
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Courses Details Area -->

@endsection