<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('Auth.register');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:8',
            'email' => 'required|unique:users|max:255',
            'password' => 'required|min:6|same:password_confirmation',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        // $user->role = $request->role;
        $user->password = Hash::make($request->password);

        $user->save();
        return redirect()->route('login');
        // return response()->json(['success' => 'User created successfully.']);
    }
}
