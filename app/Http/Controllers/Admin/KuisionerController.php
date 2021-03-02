<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//mengambil data kuisioner
use App\kuisionerdosen;

//meridericet keroute
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\DB;

class KuisionerController extends Controller
{
    public function index()
    {
        // $pertanyaan = kuisionerdosen::select('id');

        $pertanyaan = DB::table('kuisionerdosen')->get();

        // return view('adminlte/pertanyaan',['pertanyaan' =>$pertanyaan]);

        return view('adminlte.pertanyaan', compact('pertanyaan'));
        // return redirect()->route('pertanyaan.index');
    }
    public function tambah()
    {
        return view('adminlte.tambahpertanyaan');
    }
    public function baru(Request $request)
    {
        $this->validate($request, [
            'pertanyaan' => 'required',
            'aktif' => 'required',
            'choice' => 'required'
        ]);

        // Harusnya yg di panggil itu model yg udah di bikin
        kuisionerdosen::create([
            'pertanyaan' => $request->pertanyaan,
            'aktif' => $request->aktif,
            'choice' => $request->choice
        ]);

        return redirect()->route('pertanyaan.index');
    }
    public function edit($id)
    {
        $pertanyaan = Kuisionerdosen::find($id);

        return view('adminlte.editpertanyaan', compact('pertanyaan'));
    }
    public function update($id, Request $request)
    {
        $this->validate($request, [
            'id' => 'required',
            'pertanyaan' => 'required',
            'aktif' => 'required',
            'choice' => 'required'
        ]);

        $pertanyaan = Kuisionerdosen::find($id);
        $pertanyaan->pertanyaan = $request->pertanyaan;
        $pertanyaan->aktif = $request->aktif;
        $pertanyaan->choice = $request->choice;
        $pertanyaan->save();
        return redirect()->route('pertanyaan.index');
    }
    public function hapus($id)
    {
        $pertanyaan = kuisionerdosen::find($id);
        $pertanyaan->delete();
        return redirect()->route('pertanyaan.index');
    }
}
