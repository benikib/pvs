<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pv extends Model
{
    use HasFactory;
    protected $fillable = [
        'local' ,
        'dure' ,
        'hcom' ,
        'hfin' ,
        'agents' ,
        'hdebut' ,
        'hcloture' ,
        'n_etudiants_enregistre' ,
        'n_depot' ,
        'description' ,
        'examen_id' ,
        
        
    ];

   
}
