<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Bolg;
use App\Models\Counter;
use App\Models\Setting;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){

        $data['setting'] = Setting::first();
        $data['counter'] = Counter::first();
        $data['blogs'] = Bolg::where(['status'=>'active'])->paginate(15);

        return view('frontend.blog.index',$data);

    }

    public function blogDetails($id){
        $data['setting'] = Setting::first();
        $data['counter'] = Counter::first();
        $data['blogs'] = Bolg::where(['status'=>'active'])->get();
        $blog= Bolg::findOrFail($id);

        return view('frontend.blog.blog-details',$data,compact('blog'));

    }
}
