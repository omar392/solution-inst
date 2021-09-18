<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use App\Models\Opinion;
use App\Models\Seo;
use App\Models\Setting;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index(){
        $data['setting'] = Setting::first();
        $data['seo'] = Seo::first();
        $data['faqs'] = Faq::where(['status'=>'active'])->get();
        $data['opinions'] = Opinion::where(['status'=>'active'])->get();
        
        return view('frontend.faq.index',$data);

    }
}
