<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Store\DomainController;
use App\Jobs\EmailVerifyJob;
use App\Models\User;
use App\Models\UserVerify;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
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
            'password' => ['required', 'min:6'],
            'subdomain' => ['required', 'unique:domains,subdomain'],
        ]);

        //create user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $domain = new DomainController();
        $domain->store($request);

        // $domain = new Domain;
        // $domain->name = $request->subdomain;
        // $domain->save();

        $token = Str::random(64);
        UserVerify::create([
            'user_id' => $user->id,
            'token' => $token,
        ]);

        EmailVerifyJob::dispatch(new EmailVerifyJob($token));

        if ($user) {
            return back()->with('success', 'User registered successfully!');
        } else {
            return back()->with('unsuccess', 'Registration failed!');
        }

    }

}
