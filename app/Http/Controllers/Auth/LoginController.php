<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {

    }

    public function login()
    {

        $validate = $request->validate([
            'email' => $request->email,
            'password' => $request->password,
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard');
        }

    }

    public function logout()
    {

    }
}
