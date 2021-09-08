<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Setting;
use Illuminate\Http\Request;

class CourceController extends Controller
{
    public function courses(){
        
        $data['setting'] = Setting::first();
        $data['course']  = Course::where(['status'=>'active'])->paginate(10);

        return view('frontend.course.index',$data);
    }

    public function coursesDetail($id){

        $data['setting'] = Setting::first();
        $course= Course::findOrFail($id);
        // dd($course);
        return view('frontend.course.details',$data,compact('course'));

    }
}
