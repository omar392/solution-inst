@extends('frontend.layouts.master')
@section('content')

    <!-- Start Page Title Area -->
    <div class="page-title-area item-bg2 jarallax" data-jarallax='{"speed": 0.3}'>
        <div class="container">
            <div class="page-title-content">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li>Employment</li>
                </ul>
                <h2>Employment</h2>
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
                                    <p>Members : {{ \App\Models\Employment::count() }}</p>
                                </div>
                            </div>
    
                            <div class="col-lg-8 col-md-8">
                                <div class="topbar-ordering-and-search">
                                    <div class="row align-items-center">
                                        <div class="col-lg-3 col-md-5 offset-lg-4 offset-md-1 col-sm-6">
                                            <div class="product-add-to-cart">
                                                <button type="submit" class="default-btn"><i class='bx bxs-download icon-arrow before'></i><span class="label">Upload</span>
                                                <i class="bx bxs-downloadicon-arrow after"></i></button>
                                            </div>
                                        </div>
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
                                    <div class="sale-btn">Sale!</div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="{{route('employment.detail',[$item->id])}}">{{$item->name}}</a></h3>
                                    <h5><a href="{{route('employment.detail',[$item->id])}}">{{$item->special}}</a></h5>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </section>
            <!-- End Shop Area -->

@endsection