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
use Illuminate\Support\Facades\Date;

class SurveillantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $totalsurveillance = DB::table('surveillants')
    ->where('surveillants.user_id', '=', $id)
    ->select(DB::raw('count(*) as total'))
    ->value('total');
   // dd($totalsurveillances);

    $examens_restants = DB::table('examens')
    ->join('surveillants', 'examens.id', '=', 'surveillants.examen_id')
    ->where('surveillants.user_id', '=', $id)
    ->where('examens.date', '>', Date::now())
    ->select('examens.*')
    ->count();

    $i=1;
    $totalsurveillances = DB::table('surveillants as s')
    ->join('examens as e', 'e.id', '=', 's.examen_id')
    ->join('session_examens as se', 'se.id', '=', 'e.session_examens_id')
    ->where('s.user_id', '=', $id)
    ->select(DB::raw('se.id as session_id, COUNT(*) as total'))
    ->groupBy('se.id')
    ->orderBy('total', 'desc')
    ->get();




        $i = 1;
        return view("soumispv.index", compact("i",'totalsurveillance','examens_restants','totalsurveillances'));

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
        ->where('surveillants.examen_id', '=', $ex)

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
         // Récupération des IDs des agents depuis la requête
$agentIds = [
    $request->agent1,
    $request->agent2,
    $request->agent3,
    $request->agent4,
];

// Filtrer les IDs non nuls pour éviter les erreurs de requête
$agentIds = array_filter($agentIds);

// Récupération des agents depuis la base de données
$agents = DB::table('users')->whereIn('id', $agentIds)->get();

DB::table('surveillants')
    ->whereIn('id', $agentIds)  // Mettre à jour les lignes avec des ID dans $agentIds
    ->update([
        'participer' => true,     // Mettre à jour la colonne participer
        'local' => $request->local // Mettre à jour la colonne local
    ]);

// Encodage en JSON
$json_agents = json_encode($agents);

            //dd($request);
            pv::create([
                'local'=>$request->local ,
                'dure'=>$request->dure ,
                'hcom'=>$request->hcom ,
                'hfin'=>$request->hfin ,
                'agents'=>$json_agents ,
                'hdebut'=>$request->hd ,
                'hcloture'=>$request->hcloture ,
                'n_etudiants_enregistre'=>$request->n_etudiant ,
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
