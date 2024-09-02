<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SessionExamen extends Model
{
    use HasFactory;
    protected $fillable = [
        'intitule' ,
        'an_academique' ,
        'promotion' ,
        'semestre',
        'mention'  ,
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
