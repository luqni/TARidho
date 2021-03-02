<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jawabankuisioner extends Model
{
    //
    protected $table = "jawabankuisioner";

    protected $fillable = ['id', 'jawaban'];

    public $timestamp = false;

    public function kuisionerkelas()
    {
        return $this->belongsTo('App\kuisionerkelas');
    }
}
