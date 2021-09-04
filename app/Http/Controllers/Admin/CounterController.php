<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Counter;
use Illuminate\Http\Request;

class CounterController extends Controller
{
    public function index(){
        $counter = Counter::first();
        return view('admin.counter.edit',compact('counter'));
    }
    public function update(Request $request){
        $counter = Counter::findOrFail(1);
        $counter ->update([
            'team'=>$request->input('team'),
            'courses'=>$request->input('courses'),
            'years'=>$request->input('years'),
            'trainers'=>$request->input('trainers'),
        ]);
        $counter->save();
        return redirect()->back()->with('success','تم التعديل بنجاح ');
    }
}
