@extends('frontend.layouts.master')
@section('content')

    <!-- Start Page Title Area -->
    <div class="page-title-area item-bg2 jarallax" data-jarallax='{"speed": 0.3}'>
        <div class="container">
            <div class="page-title-content">
                <ul>
                    <li><a href="{{route('website')}}">{{__('web.home')}}</a></li>
                    <li>{{__('web.employment')}}</li>
                </ul>
                <h2 style="font-family: cairo;">{{__('web.employment')}}</h2>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->
            <!-- Start Shop Area -->
            <section class="shop-area ptb-100">
                <div class="container">
                    <div class="woocommerce-topbar">
                        <div class="row align-items-center">
                            <div class="col-lg-4 col-md-4">
                                <div class="topbar-result-count">
                                    <p style="font-family: cairo;">{{__('web.number')}} : {{ \App\Models\Employment::count() }}</p>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="single-footer-widget mb-30">
                                    <h3 style="font-family: cairo;">{{__('web.employment')}}</h3>
                                    <div class="newsletter-box">
                                        <a href="{{route('fronts.employment.subscribe')}}" class="default-btn"><i class='bx bx-paper-plane icon-arrow before'></i><span class="label">{{__('web.sub')}}</span><i class="bx bx-paper-plane icon-arrow after"></i></a>                      
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="row">
                        @foreach ($employment as $item)
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="single-product-box mb-30">
                                <div class="product-image">
                                    <a href="{{route('employment.detail',[$item->id])}}">
                                        <img src="{{ asset('upload/employment/' . $item->image) }}" alt="image">
                                        <img src="{{ asset('upload/employment/' . $item->image) }}" alt="image">
                                    </a>
                                    <a href="{{route('employment.detail',[$item->id])}}" class="add-to-cart-btn">Details</a>
                                    <div class="sale-btn">{{$item->type}}</div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="{{route('employment.detail',[$item->id])}}">{{$item->name}}</a></h3>
                                    <h5><a href="{{route('employment.detail',[$item->id])}}">{{$item->special}}</a></h5>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="pagination-area text-center">

                        
                        {{-- {!! $course->links() !!}  --}}
                        <span class="page-numbers current" aria-current="page">{!! $employment->appends(['sort' => 'science-stream'])->links() !!}</span>
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
            <!-- End Shop Area -->

@endsection