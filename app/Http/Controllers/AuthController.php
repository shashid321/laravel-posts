<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('Auth.login');
    }

    public function logout()
    {
        // Auth::logout();
        // auth->user()->tokens->delete();
        auth()->logout();
        return redirect('/login');
    }

    // Admin =>/admin/dashboard
    // User =>/dashboard
    public function store(Request $request)
    {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            // if(Auth::user()->role == 'admin'){
            //     return redirect('/admin/dashboard');
            // }else{
            //     return redirect('/dashboard');
            // }
            return redirect()->route('index');
        }
    }

    public function dashboard()
    {
        return view('dashboard');
    }
}
