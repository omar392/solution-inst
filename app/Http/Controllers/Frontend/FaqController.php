<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use App\Models\Setting;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index(){
        $data['setting'] = Setting::first();
        $data['faqs'] = Faq::where(['status'=>'active'])->get();
        return view('frontend.faq.index',$data);

    }
}
