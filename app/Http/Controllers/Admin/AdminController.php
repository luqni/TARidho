<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use App\Http\Validator;


class AdminController extends Controller
{
    //
    protected $redirectTo= '/dosen';

    public function _construct()
    {
        $this->middleware('dosen',['except' => 'getlogout']);
    }

    public function validator(array $data)
    {
        return validator::make($data, [
            'nama' => 'required|max300',
            'password' => 'required|confirmed|min:6'
        ]);
    }

    public function create(array $data)
    {
        return dosen::create([
            'nama' => $data['nama'],
            'password' => bcrytp($data['password']),
        ]);
    }
}
