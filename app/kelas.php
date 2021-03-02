<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kelas extends Model
{
    //
    protected $table = "kelas";

    protected $fillable = ['id','kode','semester','dosen_id','matakuliah_id','prodi_id'];

    public $timestamp = false;

    public function kuisionerkelas()
    {
        return $this->belongsTo('App\kuisionekelas');
    }
}
