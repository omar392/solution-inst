@extends('admin.layouts.master')
@section('content')
            <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        
            <!-- Start content -->
            <div class="content">
                <div class="container-fluid">
                    @include('admin.layouts.notification')
                    <div class="page-title-box">
                        <div class="row align-items-center">
                            <div class="col-sm-6">
                                <h4 class="page-title" style="font-family: cairo;">الرئيسية</h4>
                            </div>
                            {{-- <div class="col-sm-6">
                                <ol class="breadcrumb float-right">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Stexo</a></li>
                                    <li class="breadcrumb-item active">Dashboard</li>
                                </ol>
                            </div> --}}
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end page-title -->

                    <div class="row">

                        <div class="col-sm-6 col-xl-4">
                            <a href="{{route('course.index')}}">
                            <div class="card">
                                <div class="card-heading p-4">
                                    <div class="mini-stat-icon float-right">
                                        <i class="mdi mdi-school bg-danger  text-white"></i>
                                    </div>
                                    <div>
                                        <h5 class="font-16" style="font-family: cairo;">المسارات التدريبية</h5>
                                    </div>
                                    <h3 class="mt-4">{{\App\Models\Course::count()}}</h3>
                                    <div class="progress mt-4" style="height: 4px;">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: {{\App\Models\Course::count()}}%" aria-valuenow="" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p class="text-muted mt-2 mb-0">العدد الموجود<span class="float-right">{{\App\Models\Course::count()}}</span></p>
                                </div>
                            </div>
                            </a>
                        </div>

                        <div class="col-sm-6 col-xl-4">
                            <a href="{{route('team.index')}}">
                            <div class="card">
                                <div class="card-heading p-4">
                                    <div class="mini-stat-icon float-right">
                                        <i class="mdi mdi-account-group bg-danger text-white"></i>
                                    </div>
                                    <div>
                                        <h5 class="font-16" style="font-family: cairo;" >فريق العمل</h5>
                                    </div>
                                    <h3 class="mt-4">{{\App\Models\Team::count()}}</h3>
                                    <div class="progress mt-4" style="height: 4px;">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: {{\App\Models\Team::count()}}%" aria-valuenow="" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p class="text-muted mt-2 mb-0">العدد الموجود<span class="float-right">{{\App\Models\Team::count()}}</span></p>
                                </div>
                            </div>
                            </a>
                        </div>

                        <div class="col-sm-6 col-xl-4">
                            <a href="{{route('blog.index')}}">
                            <div class="card">
                                <div class="card-heading p-4">
                                    <div class="mini-stat-icon float-right">
                                        <i class="mdi mdi-pencil-outline bg-danger text-white"></i>
                                    </div>
                                    <div>
                                        <h5 class="font-16" style="font-family: cairo;" >المدونة و المقالات</h5>
                                    </div>
                                    {{-- <h3 class="mt-4">{{\App\Models\Bolg::where('status','inactive')->count()}}</h3> --}}
                                    <h3 class="mt-4">{{\App\Models\Bolg::count()}}</h3>
                                    <div class="progress mt-4" style="height: 4px;">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: {{\App\Models\Bolg::count()}}%" aria-valuenow="" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p class="text-muted mt-2 mb-0">عدد المقالات<span class="float-right">{{\App\Models\Bolg::count()}}</span></p>
                                </div>
                            </div>
                            </a>
                        </div>

                        <div class="col-sm-6 col-xl-4">
                            <a href="{{route('employment.index')}}">
                            <div class="card">
                                <div class="card-heading p-4">
                                    <div class="mini-stat-icon float-right">
                                        <i class="mdi mdi-marker-check bg-danger text-white"></i>
                                    </div>
                                    <div>
                                        <h5 class="font-16" style="font-family: cairo;" >التوظيف</h5>
                                    </div>
                                    {{-- <h3 class="mt-4">{{\App\Models\Bolg::where('status','inactive')->count()}}</h3> --}}
                                    <h3 class="mt-4">{{\App\Models\Employment::count()}}</h3>
                                    <div class="progress mt-4" style="height: 4px;">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: {{\App\Models\Employment::count()}}%" aria-valuenow="" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p class="text-muted mt-2 mb-0">عدد المقدمين للوظائف<span class="float-right">{{\App\Models\Employment::count()}}</span></p>
                                </div>
                            </div>
                            </a>
                        </div>

                        <div class="col-sm-6 col-xl-4">
                            <a href="{{route('faq.index')}}">
                            <div class="card">
                                <div class="card-heading p-4">
                                    <div class="mini-stat-icon float-right">
                                        <i class="mdi mdi-lock-question bg-danger text-white"></i>
                                    </div>
                                    <div>
                                        <h5 class="font-16" style="font-family: cairo;" >الأسئلة الشائعة</h5>
                                    </div>
                                    {{-- <h3 class="mt-4">{{\App\Models\Bolg::where('status','inactive')->count()}}</h3> --}}
                                    <h3 class="mt-4">{{\App\Models\Faq::count()}}</h3>
                                    <div class="progress mt-4" style="height: 4px;">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: {{\App\Models\Faq::count()}}%" aria-valuenow="" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p class="text-muted mt-2 mb-0">عدد الأسئلة<span class="float-right">{{\App\Models\Faq::count()}}</span></p>
                                </div>
                            </div>
                            </a>
                        </div>

                        <div class="col-sm-6 col-xl-4">
                            <a href="{{route('customer.index')}}">
                            <div class="card">
                                <div class="card-heading p-4">
                                    <div class="mini-stat-icon float-right">
                                        <i class="mdi mdi-web bg-danger text-white"></i>
                                    </div>
                                    <div>
                                        <h5 class="font-16" style="font-family: cairo;" >العملاء و الشركاء</h5>
                                    </div>
                                    {{-- <h3 class="mt-4">{{\App\Models\Bolg::where('status','inactive')->count()}}</h3> --}}
                                    <h3 class="mt-4">{{\App\Models\Customer::count()}}</h3>
                                    <div class="progress mt-4" style="height: 4px;">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: {{\App\Models\Customer::count()}}%" aria-valuenow="" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p class="text-muted mt-2 mb-0">عدد العملاء<span class="float-right">{{\App\Models\Customer::count()}}</span></p>
                                </div>
                            </div>
                            </a>
                        </div>

                        <div class="col-sm-6 col-xl-4">
                            <a href="{{route('advert.index')}}">
                            <div class="card">
                                <div class="card-heading p-4">
                                    <div class="mini-stat-icon float-right">
                                        <i class="mdi mdi-microphone-variant bg-danger text-white"></i>
                                    </div>
                                    <div>
                                        <h5 class="font-16" style="font-family: cairo;" >الاعلانات</h5>
                                    </div>
                                    {{-- <h3 class="mt-4">{{\App\Models\Bolg::where('status','inactive')->count()}}</h3> --}}
                                    <h3 class="mt-4">{{\App\Models\Advert::count()}}</h3>
                                    <div class="progress mt-4" style="height: 4px;">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: {{\App\Models\Advert::count()}}%" aria-valuenow="" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p class="text-muted mt-2 mb-0">عدد الاعلانات<span class="float-right">{{\App\Models\Advert::count()}}</span></p>
                                </div>
                            </div>
                            </a>
                        </div>

                        <div class="col-sm-6 col-xl-4">
                            <a href="{{route('slider.index')}}">
                            <div class="card">
                                <div class="card-heading p-4">
                                    <div class="mini-stat-icon float-right">
                                        <i class="mdi mdi-set-none bg-danger text-white"></i>
                                    </div>
                                    <div>
                                        <h5 class="font-16" style="font-family: cairo;" >الشرائح</h5>
                                    </div>
                                    {{-- <h3 class="mt-4">{{\App\Models\Bolg::where('status','inactive')->count()}}</h3> --}}
                                    <h3 class="mt-4">{{\App\Models\Slider::count()}}</h3>
                                    <div class="progress mt-4" style="height: 4px;">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: {{\App\Models\Slider::count()}}%" aria-valuenow="" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p class="text-muted mt-2 mb-0">عدد الشرائح<span class="float-right">{{\App\Models\Slider::count()}}</span></p>
                                </div>
                            </div>
                            </a>
                        </div>

                        <div class="col-sm-6 col-xl-4">
                            <a href="{{route('opinion.index')}}">
                            <div class="card">
                                <div class="card-heading p-4">
                                    <div class="mini-stat-icon float-right">
                                        <i class="mdi mdi-crown bg-danger text-white"></i>
                                    </div>
                                    <div>
                                        <h5 class="font-16" style="font-family: cairo;" >أراء الجمهور</h5>
                                    </div>
                                    {{-- <h3 class="mt-4">{{\App\Models\Bolg::where('status','inactive')->count()}}</h3> --}}
                                    <h3 class="mt-4">{{\App\Models\Opinion::count()}}</h3>
                                    <div class="progress mt-4" style="height: 4px;">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: {{\App\Models\Opinion::count()}}%" aria-valuenow="" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p class="text-muted mt-2 mb-0">عدد الأراء<span class="float-right">{{\App\Models\Opinion::count()}}</span></p>
                                </div>
                            </div>
                            </a>
                        </div>

                        <div class="col-sm-6 col-xl-4">
                            <a href="{{route('gallary.index')}}">
                            <div class="card">
                                <div class="card-heading p-4">
                                    <div class="mini-stat-icon float-right">
                                        <i class="mdi mdi-google-photos bg-danger text-white"></i>
                                    </div>
                                    <div>
                                        <h5 class="font-16" style="font-family: cairo;" >معرض الصور</h5>
                                    </div>
                                    {{-- <h3 class="mt-4">{{\App\Models\Bolg::where('status','inactive')->count()}}</h3> --}}
                                    <h3 class="mt-4">{{\App\Models\Gallary::count()}}</h3>
                                    <div class="progress mt-4" style="height: 4px;">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: {{\App\Models\Gallary::count()}}%" aria-valuenow="" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p class="text-muted mt-2 mb-0">عدد الصور<span class="float-right">{{\App\Models\Gallary::count()}}</span></p>
                                </div>
                            </div>
                            </a>
                        </div>

                    </div>

                    <!-- end row -->


                </div>
                <!-- container-fluid -->

            </div>
            <!-- content -->

        
        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->
@endsection