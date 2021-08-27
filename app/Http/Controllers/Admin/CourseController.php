<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $course = Course::get();
        return view('admin.course.index',compact('course'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title_ar'=>'string|required',
            'title_en'=>'string|required',
            'description_en'=>'string|required',
            'description_en'=>'string|required',
            'image'=>'required',
            'status'=>'nullable|in:active,inactive',
        ]);
        $data = $request->all();
        if ($request->file('image')){
            $file = $request->file('image');
            $filename =date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/course'),$filename);
            $data['image']=$filename;
        }
        $status = Course::create($data);
        if($status){
            return redirect()->route('course.index')->with('success','تم الإنشاء بنجاح');
        }else{
            return back()->with('error','هناك خطأ ما !!');
        }
    }

    public function courseStatus(Request $request){

        // dd($request->all());
        if($request->mode=='true'){
            DB::table('courses')->where('id',$request->id)->update(['status'=>'active']);
        }
        else{
            DB::table('courses')->where('id',$request->id)->update(['status'=>'inactive']);
        }
        return response()->json(['msg'=>'تم تغيير الحالة بنجاح','status'=>true]);
        
        }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course = Course::find($id);
        if($course){
            return view('admin.course.edit',compact('course'));
        }else{
            return back()->with('error','هذه البيانات غير موجودة');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $course = Course::find($id);
        if($course){
            $this->validate($request,[
                'title_ar'=>'string|required',
                'title_en'=>'string|required',
                'description_en'=>'string|required',
                'description_en'=>'string|required',
                // 'image'=>'required',
                'status'=>'nullable|in:active,inactive',
            ]);
            $data = $request->all();
            if ($request->file('image')){
                $file = $request->file('image');
                @unlink(public_path('upload/course/'.$data->image));
                $filename =date('YmdHi').$file->getClientOriginalName();
                $file->move(public_path('upload/course'),$filename);
                $data['image']=$filename;
            }
            $status = $course->fill($data)->save();
            if($status){
                return redirect()->route('course.index')->with('success','تم التعديل بنجاح');
            }else{
                return back()->with('error','هناك خطأ ما !!');
            }
        }else{
            return back()->with('error','هذه البيانات غير موجودة');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = Course::find($id);
        if($course){
        $status=$course->delete();
        if($status){
            return redirect()->route('course.index')->with('success','تم الحذف بنجاح');
        }else{
            return redirect()->with('error','هناك خطأ ما !!');
        }
        }else{
            return back()->with('error','هذه البيانات غير موجودة');
        }
    }
}
