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

        <!-- Start Product Details Area -->
        <section class="product-details-area pt-100 pb-70">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-12">
                        <div class="products-details-image">
                            <ul class="slickslide">
                                <li><img src="{{ asset('upload/employment/' . $employment->image) }}" alt="image"></li>
                            </ul>

                        </div>
                    </div>

                    <div class="col-lg-7 col-md-12">
                        <div class="product-details-desc">
                            <h3>{{$employment->name}}</h3>

                            <div class="product-meta">
                                <span>Email: <span class="sku">{{$employment->email}}</span></span>
                                <span>Phone: <span class="in-stock">{{$employment->phone}}</span></span>
                                <span>Address: {{$employment->address}}</span>
                                <span>Special: {{$employment->special}}</span>
                                {{-- <span>CV: <a href="{{asset('upload/employment/' . $employment->file)}}" download>تحميل CV</a></span> --}}
                            </div>

                            <div class="product-add-to-cart">
                                <h1>CV: <a href="{{asset('upload/employment/' . $employment->file)}}" download>
                                    <button type="submit" class="default-btn"><i class='bx bxs-download icon-arrow before'></i><span class="label">Download</span>
                                        <i class="bx bxs-downloadicon-arrow after"></i></button></a> </h1>
{{-- <a href="{{asset('upload/employment/' . $employment->file)}}" download>تحميل CV</a> --}}

                            </div>

                        </div>
                    </div>

                </div>
            </div>

        </section>
        <!-- End Product Details Area -->
    
@endsection