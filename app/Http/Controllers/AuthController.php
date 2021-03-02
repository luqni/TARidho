<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function getLogin()
    {
        return view('core.login');
    }

    public function postlogin(Request $request)
    {
        //
        dd('Login Ok');
    }

    public function getregister()
    {
        return view('core.register');
    }

    public function postregistration(Request $request)
    {
        //
        dd('Registration Ok');
    }
}
