@extends('frontend.layouts.master')
@section('content')

    <!-- Start Page Title Area -->
    <div class="page-title-area item-bg2 jarallax" data-jarallax='{"speed": 0.3}'>
        <div class="container">
            <div class="page-title-content">
                <ul>
                    <li><a href="{{route('website')}}">Home</a></li>
                    <li>Employment</li>
                </ul>
                <h2>Employment</h2>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

            <!-- Start FAQ Area -->
            <section class="faq-area ptb-100">
                <div class="container">
                    <div class="tab faq-accordion-tab">
    
                        <div class="tab-content">
                            <div class="tabs-item">
                                <div class="faq-accordion">
                                    <ul class="accordion">
                                        @foreach ($faqs as $item)
                                        <li class="accordion-item">
                                            <a class="accordion-title" href="javascript:void(0)">
                                                <i class='bx bx-chevron-down'></i>
                                                {{$item->question}}
                                            </a>
                                            <div class="accordion-content">
                                                <p>{{$item->answer}}</p>
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End FAQ Area -->
    
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
                                <img src="{{asset('frontend/assets/img/become-instructor.jpg')}}" alt="image">
                            </div>
                        </div>
    
                        <div class="col-lg-6 col-md-6">
                            <div class="become-instructor-partner-image bg-image2 jarallax" data-jarallax='{"speed": 0.3}'>
                                <img src="{{asset('frontend/assets/img/become-partner.jpg')}}" alt="image">
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
            <!-- End Become Instructor & Partner Area -->

@endsection