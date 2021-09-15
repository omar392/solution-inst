<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Employment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class EmploymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employment = Employment::get();
        return view('admin.employment.index',compact('employment'));
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
            'name'=>'string|required',
            'email'=>'string|required',
            'address'=>'string|required',
            'phone'=>'string|required',
            'special'=>'string|required',
            'file' => 'required|mimes:pdf,xlx,csv|max:2048',
            'image'=>'required',
            'status'=>'nullable|in:active,inactive',
            'type'=>'nullable',
        ]);
        $data = $request->all();
        if($request->file('file')){
            $file = $request->file('file');
            $filename =date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/employment'),$filename);
            $data['file']=$filename;
            // $fileName = time().'.'.$request->file->extension();  
            // $request->file->move(public_path('upload/employment'),$fileName);
        }
        if ($request->file('image')){
            $file = $request->file('image');
            $filename =date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/employment'),$filename);
            $data['image']=$filename;
        }
        $status = Employment::create($data);
        if($status){
            return redirect()->route('employment.index')->with('success','تم الإنشاء بنجاح');
        }else{
            return back()->with('error','هناك خطأ ما !!');
        }
    }
    public function download(Request $request,$file){

        return response()->download(public_path('upload/employment/' . $file));

    }

    
    public function employmentStatus(Request $request){

        // dd($request->all());
        if($request->mode=='true'){
            DB::table('employments')->where('id',$request->id)->update(['status'=>'active']);
        }
        else{
            DB::table('employments')->where('id',$request->id)->update(['status'=>'inactive']);
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
        $employment = Employment::find($id);
        if($employment){
            return view('backend.employment.view',compact(['employment']));
        }else{
            return back()->with('error','هذه البيانات غير موجودة');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employment = Employment::find($id);
        if($employment){
            return view('admin.employment.edit',compact('employment'));
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
        $employment = Employment::find($id);
        if($employment){
            $this->validate($request,[
                'name'=>'string|required',
                'email'=>'string|required',
                'address'=>'string|required',
                'phone'=>'string|required',
                'special'=>'string|required',
                'file' => 'required|mimes:pdf,xlx,csv|max:2048',
                'image'=>'required',
                'status'=>'nullable|in:active,inactive',
                'type'=>'nullable',

            ]);
            $data = $request->all();
        
            if ($request->file('file')){
                $file = $request->file('file');
                @unlink(public_path('upload/employment/'.$data->file));
                $filename =date('YmdHi').$file->getClientOriginalName();
                $file->move(public_path('upload/employment'),$filename);
                $data['file']=$filename;
            }
            if ($request->file('image')){
                $file = $request->file('image');
                @unlink(public_path('upload/employment/'.$data->image));
                $filename =date('YmdHi').$file->getClientOriginalName();
                $file->move(public_path('upload/employment'),$filename);
                $data['image']=$filename;
            }
            $status = $employment->fill($data)->save();
            if($status){
                return redirect()->route('employment.index')->with('success','تم التعديل بنجاح');
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
        $employment = Employment::find($id);
        if($employment){
        $status=$employment->delete();
        if($status){
            return redirect()->route('employment.index')->with('success','تم الحذف بنجاح');
        }else{
            return redirect()->with('error','هناك خطأ ما !!');
        }
        }else{
            return back()->with('error','هذه البيانات غير موجودة');
        }
    }
}
