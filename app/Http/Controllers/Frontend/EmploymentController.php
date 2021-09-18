<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Employment;
use App\Models\Seo;
use App\Models\Setting;
use Illuminate\Http\Request;

class EmploymentController extends Controller
{
    public function employment(){
        $data['setting'] = Setting::first();
        $data['seo'] = Seo::first();
        $data['employment']  = Employment::where(['status'=>'active'])->paginate(10);

        return view('frontend.employment.index',$data);
    }


    public function employmentDetail($id){

        $data['setting'] = Setting::first();
        $data['seo'] = Seo::first();

        $employment= Employment::findOrFail($id);
        
        return view('frontend.employment.details',$data,compact('employment'));

    }

    public function employmentSubscribe(){

        $data['setting'] = Setting::first();
        $data['seo'] = Seo::first();

        return view('frontend.employment.subscribe',$data);

    }

    public function saveSubscribe(Request $request){

        $this->validate($request,[
            'name'=>'string|required',
            'email'=>'string|required',
            'address'=>'string|required',
            'phone'=>'string|required',
            'special'=>'string|required',
            'file' => 'required|mimes:pdf,xlx,csv|max:2048',
            'image'=>'required',
            'status'=>'nullable|in:active,inactive',
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
            return redirect()->route('fronts.employment.subscribe')->with('success','تم الإنشاء بنجاح');
        }else{
            return back()->with('error','هناك خطأ ما !!');
        }

    }

}
