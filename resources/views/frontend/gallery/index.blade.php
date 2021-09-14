@extends('frontend.layouts.master')
@section('content')

    <!-- Start Page Title Area -->
    <div class="page-title-area item-bg2 jarallax" data-jarallax='{"speed": 0.3}'>
        <div class="container">
            <div class="page-title-content">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li>Gallery</li>
                </ul>
                <h2>Gallery</h2>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

        <!-- Start Gallery Area -->
        <section class="gallery-area pt-100 pb-70">
            <div class="container">
                <div class="row">

            @foreach ($gallery as $item)
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-gallery-item mb-30">
                    <img src="{{ asset('upload/gallary/' . $item->image) }}" alt="Gallery Image" data-original="{{ asset('upload/gallary/' . $item->image) }}">
                </div>
            </div>
            @endforeach

                </div>
            </div>
        </section>
        <!-- End Gallery Area -->


@endsection