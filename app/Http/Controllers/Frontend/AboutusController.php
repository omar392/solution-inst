<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Counter;
use App\Models\Setting;
use App\Models\Team;
use Illuminate\Http\Request;

class AboutusController extends Controller
{
    public function index(){

        $data['setting'] = Setting::first();
        $data['aboutus'] = About::first();
        $data['counter'] = Counter::first();
        $data['team'] = Team::where(['status'=>'active'])->get();
        return view('frontend.aboutus.index',$data);
    }
}
