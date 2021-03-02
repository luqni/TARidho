<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
    //mengambil data dari kelas
use App\kelas;
    //meriderect kuisioner
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\DB;

class KelasController extends Controller
{
   public function index(){
    //    $kelas = kelas::select('id');

        $kelas = DB::table('kelas')->get();
       return view('adminlte.kelas',compact('kelas'));
   }
   public function tambah(){
       return view('adminlte.tambahkelas');
   }
   public function new(Request $request)
   {


       kelas::create([

           'kode' => $request->kode,
           'semester' => $request->semester,
           'dosen_id' => $request->dosen_id,
           'matakuliah_id' => $request->matakuliah_id,
           'prodi_id' => $request->prodi_id
       ]);
       return redirect()->route('kelas.index');
   }
   public function edit($id){
       $kelas = kelas::find($id);

       return view('adminlte.editkelas',compact('kelas'));
   }
   public function update($id,Request $request)
   {
       $this->validate($request, [
        'id' => 'required',
        'kode' => 'required',
        'semester' => 'required',
        'dosen_id' => 'required',
        'matakuliah_id' => 'required',
        'prosi_id' => 'required'
       ]);

       $kelas = kelas::find($id);
       $kelas->kode = $request->kode;
       $kelas->semester = $request->semester;
       $kelas->dosen_id =$request->dosen_id;
       $kelas->matkul_id = $request->matkul_id;
       $kelas->prodi_id = $request->prodi_id;
       $kelas->save();
       return redirect()->route('kelas.index');
   }
   public function hapus($id)
   {
       $kelas = kelas::find($id);
       $kelas->delete();
       return redirect('kelas.index');
   }
}
