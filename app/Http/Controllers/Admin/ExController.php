<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\kuisionerkelas;
use Illumninate\Support\Facades\DB;

class ExController extends Controller
{
    //
    public function index()
    {
        // $datas = kuisionerkelas::get();

        // $setuju = [];

        // foreach ($datas as $dp) {
        //     $setuju[] = $dp->jawaban_id;
        // }
        //  $baru = kuisionerkelas::select(\DB::raw("jawaban_id(*) as count"))
        //      ->whereJawaban('id', Jawaban("jawaban"))
        //      ->groupBy(\DB::raw("jawaban_id(created_at)"))
        //      ->pluck('count');
        return view('adminlte.ex');
    }
}
