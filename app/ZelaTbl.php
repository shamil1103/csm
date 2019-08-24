<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ZelaTbl extends Model
{
    protected $fillable = ['zelaName'];

    protected $primaryKey = 'zelaId';

    public $timestamps = false;
}
