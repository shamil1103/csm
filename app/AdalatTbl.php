<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdalatTbl extends Model
{
    
    protected $fillable = ['cortName', 'cortAddress'];

    protected $primaryKey = 'cortId';

    public $timestamps = false;
}
