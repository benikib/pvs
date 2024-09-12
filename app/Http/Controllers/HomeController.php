<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Examen;
use App\Models\SessionExamen;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    function index(){
        $admins=count(Admin::all());
        $users=count(User::all());
        $sessions = count(SessionExamen::all());
        $t_sessions = DB::table('session_examens')
    ->selectRaw('MONTH(created_at) as month, YEAR(created_at) as year, COUNT(*) as total_sessions')
    ->groupBy('month', 'year')
    ->orderBy('year', 'desc')
    ->orderBy('month', 'desc')
    ->get();
    $examens = count(Examen::all());
    //dd($t_sessions);


        return view('dashboard', compact('admins','users','sessions','t_sessions','examens'));
   }
}
