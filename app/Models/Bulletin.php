<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bulletin extends Model
{
    use HasFactory;
    protected $fillable = [
        'session' ,
        'link' ,
        'mention' ,
        'promotion' ,
        'semestre' ,
        'an_academique' ,
        //'jurie_id' ,



    ];
}