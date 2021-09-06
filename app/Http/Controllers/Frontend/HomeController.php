<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Setting;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $data['setting'] = Setting::first();
        $data['slider'] = Slider::where(['status'=>'active'])->get();
        $data['course'] = Course::where(['status'=>'active'])->get();
        return view('frontend.home',$data);
    }
}
