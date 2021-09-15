@extends('admin.layouts.master')
@section('content')


<div class="content">
    <div class="container-fluid">
        @include('admin.layouts.notification')
        <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <h4 class="page-title" style="font-family: cairo;">المسارات التدريبية</h4>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="{{route('adminhome')}}">الرئيسية</a></li>
                        <li class="breadcrumb-item active">المسارات التدريبية</li>
                    </ol>
                </div>
            </div> <!-- end row -->
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <form action="{{route('course.update',$course->id)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('patch')

                                <div class="form-group row">
                                    <label for="example-text-input"
                                        class="col-sm-2 col-form-label">العنوان</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="title_ar"
                                            id="example-text-input" placeholder="عنوان المسار" value="{{$course->title_ar}}" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Title</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="title_en"
                                            id="example-text-input" placeholder="Course Title" value="{{$course->title_en}}" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">لينك الكورس</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="course_link"
                                            id="example-text-input" placeholder="Course Link" value="{{$course->course_link}}" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input"
                                        class="col-sm-2 col-form-label">محتوى المسار</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" name="description_ar" id="editor5">{!! $course->description_ar !!}</textarea>
                                    <script>
                                            CKEDITOR.replace( 'editor5' );
                                    </script>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Course Content</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" name="description_en" id="editor">{!! $course->description_en !!}</textarea>
                                        <script>
                                                CKEDITOR.replace( 'editor' );
                                        </script>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="input-preview" for="img">أضف صورة</label>
                                    <div class="col-sm-10">
                                        <input class="input-preview__src" id="img" name="image" type="file" required />
                                    </div>
                                </div>

                                <div class="form-group text-center m-t-20">
                                    <div class="col-12">
                                        <button class="btn btn-primary btn-block btn-lg" name="submit"
                                            type="submit">تعديل</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> 
        </div>
    </div>
</div>


@endsection