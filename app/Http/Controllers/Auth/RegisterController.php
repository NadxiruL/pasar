<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        //return view
    }

    public function create()
    {

    }

    public function register(Request $request)
    {
        //check information
        $validate = $request->validate([
            'name' => ['required', 'unique:users'],
            'email' => ['required', 'email'],
            'password' => ['required', 'confirmed', 'min:6'],
        ]);

        //create user
        $user = User::create([
            'name' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        if ($user) {
            return back()->with('success', 'User registered successfully!');
        } else {
            return back()->with('unsuccess', 'Registration failed !');
        }

    }
}
