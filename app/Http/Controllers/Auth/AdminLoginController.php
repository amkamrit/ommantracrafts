<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Session;

class AdminLoginController extends Controller
{
	public function __construct(){
		$this->middleware('guest:admin');
	}
    public function showLoginForm(){
    	return view('auth.admin-login');
    }
    public function login(Request $request){
    	//validate the form data
    	$this->validate($request,[
    		'email'=>'required|email',
    		'password'=>'required|min:6'
    	]);
    //Attem Login
    	if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request ->password], $request->remember)) {
    		// if success then redirect to their intended location
            Session()->put('user_names', $request->email);
    		return redirect()->intended(route('admin'));
    	}
    	//if unsuccess then back login form
    	return redirect()->back()->withInput($request->only('email','remember'));
    	
    }
}
