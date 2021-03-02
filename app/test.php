<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class test extends Model
{
    protected $table = 'test';
    protected $fillable = ['id', 'name'];
    public $timestamp = false;
}
