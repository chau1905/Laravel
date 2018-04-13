<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;

use App\Http\Requests\LoginRequest;

class LoginController extends Controller
{
    public function getLogin()
    {
    	return view('admin.module.login.login');
    }
    public function postLogin(LoginRequest $request){
    	$login = array(
			'username' => $request ->txtUser,
			'password' => $request ->txtPass,
			//'level'=>1
    	);
    	if (Auth::attempt($login)) {
            // Authentication passed...
            return redirect('dvc_admin');
            // echo ("vao day roi!!!");
        }else{
        	 return redirect()->back();
        	 // echo ("No vao day");
        }
    }
    public function getLogout(){
    	Auth::logout();
    	return redirect('dvc_admin');
    }
}
