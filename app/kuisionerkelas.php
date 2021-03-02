<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kuisionerkelas extends Model
{
    //
    protected $table = "kuisionerkelas";

    protected $fillable = ['id', 'nim', 'kelas_id', 'pertanyaan_id', 'jawaban_id'];

    public $timestamp = false;

    public function jawabankuisionser()
    {
        return $this->hasmany(jawaban_id::class);
    }
    public function kuisionerdosen()
    {
        return $this->hasmany(pertanyaan_id::class);
    }
    public function kelas()
    {
        return $this->hasone('App\kelas');
    }
    public function setJawaban_idAttribute($value)
    {
        $this->attributes['jawaban_id'] = json_encode($value);
    }
}
