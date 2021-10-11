@extends('frontend.layouts.master')
@section('content')
@section('pageTitle',__('web.advert|'))


        <!-- Start Page Title Area -->
        <div class="page-title-area item-bg2 jarallax" style="background-image:url({{asset('frontend/assets/img/7.png')}})" data-jarallax='{"speed": 0.3}'>
            <div class="container">
                <div class="page-title-content">
                    <ul>
                        <li><a href="{{route('website')}}">{{__('web.home')}}</a></li>
                        <li>{{__('web.advert')}}</li>
                    </ul>
                    <h2 style="font-family: cairo;">{{__('web.advert')}}</h2>
                </div>
            </div>
        </div>
        <!-- End Page Title Area -->

        <!-- Start Blog Area -->
        <section class="blog-area ptb-100">
            <div class="container">
                <div class="row">

                @foreach ($adverts as $item)
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog-post mb-30">
                        <div class="post-image">
                            <a href="{{route('advert.detail', [$item->id])}}" class="d-block">
                                <img src="{{ asset('upload/advert/' . $item->image) }}" alt="image">
                            </a>
                        </div>
                        <div class="post-content">
                            <h3 style="font-family: cairo;"><a href="{{route('advert.detail', [$item->id])}}" class="d-inline-block">{{$item->title}}</a></h3>
                            <a href="{{route('advert.detail', [$item->id])}}" class="read-more-btn">{{__('web.readmore')}}<i class='bx bx-right-arrow-alt'></i></a>
                        </div>
                    </div>
                </div>
                @endforeach

      
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="pagination-area text-center">

                        
                        {{-- {!! $course->links() !!}  --}}
                        <span class="page-numbers current" aria-current="page">{!! $adverts->appends(['sort' => 'science-stream'])->links() !!}</span>
                            {{-- <a href="#" class="page-numbers">2</a>
                        <a href="#" class="page-numbers">3</a>
                            <a href="#" class="page-numbers">4</a>
                            <a href="#" class="page-numbers">5</a>
                        <a href="#" class="next page-numbers"><i class='bx bx-chevron-right'></i></a> --}}
                    </div>
                </div>
                </div>
            </div>
        </section>
        <!-- End Blog Area -->

@endsection