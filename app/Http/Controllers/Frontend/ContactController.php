<?php

namespace App\Http\Controllers\Frontend;
use App\Mail\Contact;
use App\Http\Controllers\Controller;
use App\Mail\Contact as MailContact;
// use App\Models\Contact;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index(){


        $data['setting'] = Setting::first();


        return view('frontend.contact.index',$data);
    }
    public function contactSubmit(Request $request){

        $this->validate($request,[
            'name'=>'string|required',
            'email'=>'string|required',
            'phone'=>'string|required',
            'subject'=>'string|required',
            'message'=>'string|required',
        ]);
        
        $data = $request->all();
        // return $data;
        $status = Mail::to('omarabosamaha@gmail.com')->send(new Contact($data));
        if($status){
            return back()->with('success','message sent successfully');
        }else{
            return back()->with('success','message sent successfully');
        }

    }
}
