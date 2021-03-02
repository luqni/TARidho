<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kuisionerkelas;
use App\Model\Test;
use Illuminate\Support\Facades\DB;

class KuisionerkelasController extends Controller
{
    public function index()
    {
        // $test = test::get();
        $kuisionerkelas = DB::table('kuisionerkelas')->get();

        foreach ($kuisionerkelas as $pertanyaan_id){
            echo $pertanyaan_id -> id;
        }

        return view('input', compact('kuisionerkelas'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nim' => 'required',
            'kelas' => 'required',
            'pertanyaan' => 'required',
            'jawaban' => 'required',
            'jawaban_text' => 'required'
        ]);
        return redirect()->route('input.index');
    }
}
