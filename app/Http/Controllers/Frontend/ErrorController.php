<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Counter;
use App\Models\Seo;
use App\Models\Setting;
use Illuminate\Http\Request;

class ErrorController extends Controller
{
    public function index(){
        $data['setting'] = Setting::first();
        $data['counter'] = Counter::first();
        $data['seo'] = Seo::first();

        return view('errors.404',$data);
    }
}
