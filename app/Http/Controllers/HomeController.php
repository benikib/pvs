<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Bulletin;
use App\Models\Examen;
use App\Models\SessionExamen;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $bulletins = Bulletin::all();
        
    return view('resultats.index', compact('bulletins'));
    }
}
