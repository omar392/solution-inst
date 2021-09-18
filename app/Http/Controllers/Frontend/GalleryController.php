<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Counter;
use App\Models\Gallary;
use App\Models\Seo;
use App\Models\Setting;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index(){

        $data['setting'] = Setting::first();
        $data['counter'] = Counter::first();
        $data['seo'] = Seo::first();

        $data['gallery'] = Gallary::where(['status'=>'active'])->get();

        return view('frontend.gallery.index',$data);
    }
}
