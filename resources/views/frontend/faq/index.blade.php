@extends('frontend.layouts.master')
@section('content')
@section('pageTitle',__('web.faqs|'))


    <!-- Start Page Title Area -->
    <div class="page-title-area item-bg2 jarallax" style="background-image:url({{asset('frontend/assets/img/faqs.png')}})" data-jarallax='{"speed": 0.3}'>
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
    
        <!-- Start Feedback Area -->
        <section class="feedback-area ptb-100">
            <div class="container">
                <div class="feedback-slides owl-carousel owl-theme">

                    @foreach ($opinions as $item)
                    <div class="single-feedback-item">
                        <p>“{!! $item->description !!}”</p>

                        <div class="info">
                            <h3 style="font-family: cairo;">{{$item->name}}</h3>
                            <span>{{$item->job}}</span>
                            <img src="{{ asset('upload/opinion/' . $item->image) }}" class="shadow rounded-circle" alt="image">
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </section>
        <!-- End Feedback Area -->

@endsection