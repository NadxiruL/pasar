<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {

        return view('sign_in');
    }

    public function login(Request $request)
    {

        $validate = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);

        // $credentials = $request->only('email', 'password');
        if (Auth::attempt($validate)) {
            return redirect()->intended('order.dashboard');
        } else {
            return back()->with('unsuccess', 'Wrong credentials');
        }

    }

    public function logout()
    {
        Auth::logout();

    }
}
