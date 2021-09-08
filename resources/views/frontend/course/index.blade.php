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
    <!-- Start Courses Area -->
    <section class="courses-area ptb-100">
        <div class="container">
            <div class="courses-topbar">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-4">
                        <div class="topbar-result-count">
                            <p>Courses : {{ \App\Models\Course::count() }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                @foreach ($course as $item)
                    <div class="col-lg-6 col-md-6">
                        <div class="single-courses-box without-box-shadow mb-30">
                            <div class="courses-image">
                                <a href="{{route('courses.detail',[$item->id])}}" class="d-block"><img
                                        src="{{ asset('upload/course/' . $item->image) }}" alt="image"></a>

                            </div>

                            <div class="courses-content">
                                <div class="course-author d-flex align-items-center">
                                    <img src="{{ asset('frontend/assets/img/user1.jpg') }}" class="rounded-circle mr-2"
                                        alt="image">
                                </div>

                                <h3 style="font-family: cairo;"><a href="{{route('courses.detail', [$item->id])}}"
                                        class="d-inline-block">{{ $item->title }}</a></h3>

                            </div>
                        </div>
                    </div>
                @endforeach

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="pagination-area text-center">

                        {!! $course->links() !!}
                        {{-- {!! $course->appends(['sort' => 'science-stream'])->links() !!} --}}
                        {{-- <span class="page-numbers current" aria-current="page">1</span>
                            <a href="#" class="page-numbers">2</a> --}}
                        {{-- <a href="#" class="page-numbers">3</a>
                            <a href="#" class="page-numbers">4</a>
                            <a href="#" class="page-numbers">5</a> --}}
                        {{-- <a href="#" class="next page-numbers"><i class='bx bx-chevron-right'></i></a> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Courses Area -->
@endsection
