<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Examen extends Model
{
    use HasFactory;
    protected $fillable = [
        'intitule' ,
        'professeur' ,
        'n_local' ,
        'date',
        'heure',
        'session_examens_id',
    ];
    public function session_examens_id()
    {
        return $this->belongsTo(SessionExamen::class);
    }
}
