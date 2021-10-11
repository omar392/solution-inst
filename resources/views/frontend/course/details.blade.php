@extends('frontend.layouts.master')
@section('content')
@section('pageTitle',__('web.course|'))

    <!-- Start Page Title Area -->
    <div class="page-title-area item-bg2 jarallax" style="background-image:url({{asset('frontend/assets/img/9.png')}})" data-jarallax='{"speed": 0.3}'>
        <div class="container">
            <div class="page-title-content">
                <ul>
                    <li><a href="{{route('website')}}">{{__('web.home')}}</a></li>
                    <li>{{__('web.course')}}</li>
                </ul>
                <h2 style="font-family: cairo;">{{__('web.course')}}</h2>
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
                                <a href="{{$course->course_link}}" target="_blank" class="default-btn"><i class='bx bx-paper-plane icon-arrow before'></i><span class="label">{{__('web.sub')}}</span><i class="bx bx-paper-plane icon-arrow after"></i></a>
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
                            <h3 style="font-family: cairo;">{{__('web.description')}}</h3>
                            <p><strong style="font-family: cairo;">{!! $course->description !!}</strong></p>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="courses-sidebar-information">
                            <ul>
                                <li>
                                    <span><i class='bx bx-group'></i> {{__('web.students')}}:</span>
                                    {{$counter->trainers}}
                                </li>
                                <li>
                                    <span><i class='bx bx-time'></i> {{__('web.years')}}:</span>
                                    {{ $counter->years }}
                                </li>
                                <li>
                                    <span><i class='bx bxs-institution'></i> {{__('web.team')}}:</span>
                                    <a href="#" class="d-inline-block">{{$counter->team}}</a>
                                </li>
                                <li>
                                    <span><i class='bx bx-atom'></i> {{__('web.course')}}:</span>
                                    {{$counter->courses}}
                                </li>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Courses Details Area -->

@endsection