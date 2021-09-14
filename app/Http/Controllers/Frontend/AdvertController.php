<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Advert;
use App\Models\Counter;
use App\Models\Setting;
use Illuminate\Http\Request;

class AdvertController extends Controller
{
    public function index(){

        $data['setting'] = Setting::first();
        $data['counter'] = Counter::first();
        $data['adverts'] = Advert::where(['status'=>'active'])->paginate(10);

        return view('frontend.advert.index',$data);

    }

    public function advertDetails($id){
        $data['setting'] = Setting::first();
        $data['counter'] = Counter::first();
        $data['adverts'] = Advert::where(['status'=>'active'])->get();
        $advert= Advert::findOrFail($id);

        return view('frontend.advert.advert-details',$data,compact('advert'));

    }
}
