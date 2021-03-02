<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
    //memanggil model dosen
use App\dosen;
    //meridirect route
use Illumante\Routing\Redirector;
use Illuminate\Support\Facades\DB;

class DosenController extends Controller
{
    public function index(){
        //mengambil data dosen
        // $dosen = dosen::select('id');
        $dosen = DB::table('dosen')->get();

        return view('adminlte.dosen',compact('dosen'));
    }
    public function tambah(){
        return view('adminlte.tambahdosen');
    }
    public function new(Request $request){
        $this->validate($request, [
            'jawaban' => 'required'
        ]);

        dosen::create([
            'jawaban' => $request->jawaban
        ]);
        return redirect()->route('dosen.index');
    }
    public function edit($id)
    {
        $dosen = dosen::find($id);

        return view('adminlte.editdosen',compact('dosen'));
    }
    public function update($id, Request $request){
        $this->validate($request, [

            'nama' => 'required'
        ]);

        $dosen = dosen::find($id);
        $dosen->dosen = $request->id;
        $dosen->dosen = $request->nama;
        $dosen->save();
        return redirect()->route('dosen.index');
    }
    public function hapus($id)
    {
        $dosen = dosen::find($id);
        $dosen->delete();
        return redirect('dosen.index');
    }
}
