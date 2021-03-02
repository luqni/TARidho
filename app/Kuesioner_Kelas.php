<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kuesioner_Kelas extends Model
{
    //

    protected $keyType = 'bigint';

    protected $table = 'kuesioner_kelas';

    protected $fillable =   [
        'nim', 'kelas', 'content', 'pertanyaan_1', 'pertanyaan_2', 'pertanyaan_3'
    ];
}
