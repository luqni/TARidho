<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//menampilkan data prodi
use App\prodi;

//meriderct keroute
use Illuminate\Support\Facades\DB;
use Illuminate\routing\Redirector;

class ProdiController extends Controller
{
    public function index(){
        // $prodi = prodi::select('id');
        $prodi = DB::table('prodi')->get();

        return view('adminlte.prodi',compact('prodi'));
    }
    public function tambah(){
        return view('adminlte.tambahprodi');
    }
    public function new(Request $request){
        $this->validate($request,[

            'nama' => 'required'
        ]);
        prodi::create([

            'nama' => $request->nama
        ]);
        return redirect()->route('prodi.index');
    }
    public function edit($id){
        $prodi = prodi::find($id);

        return view('adminlte.editprodi',compact('prodi.index'));
    }
    public function update($id,Request $request){
        // $this->validate($request, [
        //     'id' => 'required',
        //     'nama' => 'required'
        // ]);
        $prodi = prodi::find($request->id);
        $prodi->nama=$request->nama;
        return redirect()->route('prodi.index');
    }
    public function hapus($id){
        $prodi = prodi::find($id);
        $prodi->delete();
        return redirect()->route('prodi.index');
    }
}
