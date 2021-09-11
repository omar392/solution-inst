<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Employment;
use App\Models\Setting;
use Illuminate\Http\Request;

class EmploymentController extends Controller
{
    public function employment(){
        $data['setting'] = Setting::first();
        $data['employment']  = Employment::where(['status'=>'active'])->paginate(20);

        return view('frontend.employment.index',$data);
    }


    public function employmentDetail($id){

        $data['setting'] = Setting::first();
        $employment= Employment::findOrFail($id);
        // dd($course);
        return view('frontend.employment.details',$data,compact('employment'));

    }

}
