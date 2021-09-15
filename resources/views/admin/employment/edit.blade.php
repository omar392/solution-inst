@extends('admin.layouts.master')
@section('content')


<div class="content">
    <div class="container-fluid">
        @include('admin.layouts.notification')
        <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <h4 class="page-title" style="font-family: cairo;">التوظيف</h4>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="{{route('adminhome')}}">الرئيسية</a></li>
                        <li class="breadcrumb-item active">التوظيف</li>
                    </ol>
                </div>
            </div>
            <!-- end row -->
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <form action="{{route('employment.update',$employment->id)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('patch')

                                <div class="form-group row">
                                    <label for="example-text-input"
                                        class="col-sm-2 col-form-label">الاسم</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="name"
                                            id="example-text-input" placeholder="الاسم" value="{{$employment->name}}" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">الهاتف</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="phone" type="text"
                                            id="example-text-input" placeholder="الهاتف" value="{{$employment->phone}}" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">البريد الالكترونى</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="email" type="email"
                                            id="example-text-input" placeholder="البريد الالكترونى" value="{{$employment->email}}" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">العنوان</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="address" type="text"
                                            id="example-text-input" placeholder="العنوان" value="{{$employment->address}}" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">التخصص</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="special" type="text"
                                            id="example-text-input" placeholder="التخصص" value="{{$employment->special}}" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="example-text-input"
                                        class="col-sm-2 col-form-label">الحالة</label>
                                    <div class="col-sm-10">
                                        <select name="type" class="form-control show-tick">
                                            <option value="">--التوظيف--</option>
                                            <option value="available" {{$employment->type=='available'?'selected':''}}>موظف</option>
                                            <option value="notavailable" {{$employment->type=='notavailable'?'selected':''}}>غير موظف</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">الملف</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="file" type="file"
                                            id="example-text-input"  value="{{$employment->file}}" required>
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
                </div>
                <!-- end col -->
            </div> 
        </div>
    </div>
</div>


@endsection