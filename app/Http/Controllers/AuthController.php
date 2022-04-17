<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function login()
    {
        return 'login';
    }
    public function loginProcess(Request $req){
        $validate = Validator::make($req->all(),[
            'email' => 'required|email|unique:users,email',
            'password'=>'required'
        ]);

        if ($validate->fails()) {
            return back()->withErrors($validate->errors())->withInput();
        }

        if(auth()->attempt(['email' => $req->email, 'password' => $req->password])){
            return redirect()->route('dashboard');
        }else{
            return redirect()->back()->with('error','Invalid Credentials');
        }
    }
    public function dashboard(Request $request)
    {
        return 'dashboard';
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
    public function contact(Request $request)
    {
        $request->validate([
            'req'=>'required',
            'f_name'=>'required',
            'l_name'=>'required',
            'email'=>'required|email',
            'message'=>'required',
        ],[],[
            'req'=>'Request',
            'f_name'=>'First Name',
            'l_name'=>'Last Name',
            'email'=>'Email',
            'message'=>'Message',
        ]);
        $email="icotsolutions@gmail.com";
        Mail::send(
            'client.pages.contact-mail',
            [
                'request'=>$request->req,
                'f_name'=>$request->f_nmae,
                'l_name'=>$request->l_name,
                'email'=>$request->email,
                'messages'=>$request->message,
            ],
            function($message) use ($email){
                $message->from(env('MAIL_USERNAME'));
                $message->to($email);
                $message->subject('Contact');
            }
        );
            session()->flash('message', 'Email Sent');
            session()->flash('messageType', 'success');
            return redirect()->back();
    }
}

