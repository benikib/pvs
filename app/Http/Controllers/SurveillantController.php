<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Examen;
use App\Models\pv;
use App\Models\SessionExamen;
use App\Models\Surveillant;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;

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
        $examen = Examen::findOrFail($ex);
        $session = SessionExamen::findOrFail($examen->session_examens_id);
        $agents =  DB::table('users')
        ->leftJoin('surveillants', 'users.id', '=', 'surveillants.user_id')
        ->where('surveillants.examen_id', '=', $id)
        ->orWhereNull('surveillants.user_id')
        ->select('users.*')
        ->get();
        $user = User::findOrFail(Auth::user()->id);
       
    //    dd($user);
        return view("soumispv.pv",compact("session",'examen','agents','user'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function pv_store(Request $request)
    {
        try {
            $validated = $request->validate([
            //'intitule' => 'required',
            ]);
            $json_agent = json_encode([
                "agent1" => $request->agent1,
                "agent2" => $request->agent2,
                "agent3" => $request->agent3,
                "agent4" => $request->agent4,
            ]);
            // dd($json_agent);
            pv::create([
                'local'=>$request->local ,
                'dure'=>$request->dure ,
                'hcom'=>$request->hcom ,
                'hfin'=>$request->hfin ,
                'agents'=>$json_agent ,
                'hdebut'=>$request->hd ,
                'hcloture'=>$request->hcloture ,
                'n_etudiant_enregistre'=>$request->n_etudiant ,
                'n_depot'=>$request->n_etudiants_depot ,
                'description'=>$request->description ,
                'examen_id' =>$request->examen_id,
            ]);
            
        return redirect()->back()->with('success', 'creation avec success');
        } catch (\Throwable $th) {
            dd($th);
        return redirect()->back()->with('erreur', 'error');
        }
        dd($request);
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
