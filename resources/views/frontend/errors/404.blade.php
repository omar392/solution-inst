@extends('frontend.layouts.master')
@section('content')

      <!-- Start Page Title Area -->
      <div class="page-title-area item-bg2 jarallax" data-jarallax='{"speed": 0.3}'>
        <div class="container">
            <div class="page-title-content">
                <ul>
                    <li><a href="{{route('website')}}">{{__('web.home')}}</a></li>
                    <li>الصفحة غير موجودة</li>
                </ul>
                {{-- <h2 style="font-family: cairo;">{{__('web.contact')}}</h2> --}}
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    
    <!-- Start Error 404 Area -->
    <div class="error-404-area">
        <div class="container">
            <div class="notfound">
                <div class="notfound-bg">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>

                <h1>Oops!</h1>
                <h3>الصفحة غير موجودة</h3>
                <p>The page you are looking for might have been removed had its name changed or is temporarily unavailable.</p>
                <a href="index.html" class="default-btn"><i class='bx bx-home-circle icon-arrow before'></i><span class="label">Back Home</span><i class="bx bx-home-circle icon-arrow after"></i></a>
            </div>
        </div>
    </div>
    <!-- End Error 404 Area -->

@endsection