<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AuthController extends Controller
{
    public function login(){
        return view('admin.login');
    }

    public function adminlogin(Request $request) {
        if(Auth::attempt($request->only('email', 'password'))) {
            return redirect('/dashboard');
        }
        return redirect('/admin/login');
    }

    public function logout(){
        Auth::logout();
        return redirect('/admin/login');
    }
}
