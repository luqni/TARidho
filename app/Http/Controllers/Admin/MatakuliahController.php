<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

    //mengambil data kuisioner
use App\matakuliah;

    //meridericet keroute
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\DB;

class MatakuliahController extends Controller
{
    public function index(){
        // $matakuliah = matkuliah::select('id');
        $matakuliah = DB::table('matakuliah')->get();

        return view('adminlte.matkul',compact('matakuliah'));
    }
    public function tambah(){
        return view('adminlte.tambahmatkul');
    }
    public function new(Request $request){
        $this->validate($request, [
            'nama' => 'required',
            'sks' => 'required'
        ]);

            //memanggil model
         matakuliah::create([
             'nama' =>$request->nama,
             'sks' => $request->sks
         ]);

        return redirect()->route('matkul.index');
    }
    public function edit($id){
        $matakuliah = matakuliah::find($id);

        return view('adminlte.editmatkul',compact('matakuliah'));
    }
    public function update($id,Request $request){
       $this->validate($request,[
           'id' => 'request',
           'nama' => 'request',
           'sks' => 'request'
       ]);

       $matakuliah = matakuliah::find($id);
       $matakuliah->id = $request->id;
       $matakuliah->nama = $request->nama;
       $matakuliah->sks = $request->sks;
       $matakuliah->save();
       return redirect()->route('matkul.index');
    }
    public function hapus($id)
    {

        $matakuliah = matakuliah::find($id);
        $matakuliah->delete();

        return redirect()->route('matkul.index');
    }
}
