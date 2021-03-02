<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\kuisionerkelas;
use Redirect\Response;



class ChartController extends Controller
{
    public function index(){
    return view('adminlte.chart');
    }
}
