<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Surveillant;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SurveillantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admins = Admin::with('user')->get();
        $i = 1;
        return view("soumispv.index", compact("admins",  "i"));

    }
    public function programme($id)
    {
        $examens = DB::table('examens')
        ->join('surveillants', 'examens.id', '=', 'surveillants.examen_id')
        ->where('surveillants.user_id', '=', $id)
        ->select('examens.*')
        ->get();
        $i=1;
    
        return view("soumispv.programme", compact("examens",  "i"));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function pv($id,$ex)
    {
        
        $admins = Admin::with('user')->get();
        $i = 1;
        return view("soumispv.pv", compact("admins",  "i"));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Surveillant $surveillant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Surveillant $surveillant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Surveillant $surveillant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Surveillant $surveillant)
    {
        //
    }
}
