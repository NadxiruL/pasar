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
            'name' => ['required', 'unique'],
            'email' => ['required', 'email'],
            'password' => ['required', 'confirme'],
        ]);

        //create user
        $user = User::create([
            'name' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        //todo lepas create buat apa

    }
}
