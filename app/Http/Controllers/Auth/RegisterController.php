<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserVerify;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    public function index()
    {
        return view('sign_up');
    }

    public function create()
    {

    }

    public function register(Request $request)
    {

        //check information
        $validate = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'confirmed', 'min:6'],
            'password_confirmation' => ['required', 'min:6'],
        ]);

        //create user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $token = Str::random(64);
        UserVerify::create([
            'user_id' => $user->id,
            'token' => $token,
        ]);

        Mail::send('emails.verify', ['token' => $token], function ($message) use ($request) {
            $message->to($request->email);
            $message->subject('Email Verification Mail');
        });

        if ($user) {
            return back()->with('success', 'User registered successfully!');
        } else {
            return back()->with('unsuccess', 'Registration failed!');
        }

    }

}
