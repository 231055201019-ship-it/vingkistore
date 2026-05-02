<?php

namespace App\Http\Controllers;


class AuthController extends Controller
{
    public function login()
    {
        return view('layouts.auth.login');
    }

    public function register()
    {
        return view('layouts.auth.register');
    }
}
