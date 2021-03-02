<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use JsValidator;
use App\User;
use Illuminate\Support\Facades\DB;


class LoginController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function login(Request $request){

        // $user = User::where('email','=', $request['email'])->where('password','=', $request['password'])->first();
        // $user = DB::table('users')->select('*')->where('email','=', $request['email'])->where('password','=', $request['password'])->get();
        // if($user){
        //     return view('adminlte.ex');
        // }else{
        //     return view('auth.login');
        // }
        return view('adminlte.ex');

    }


}
