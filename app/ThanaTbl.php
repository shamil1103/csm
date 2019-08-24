<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ThanaTbl extends Model
{
    protected $fillable = ['thanaName'];

    protected $primaryKey = 'thanaId';

    public $timestamps = false;
}
