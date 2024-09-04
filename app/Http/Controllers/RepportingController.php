<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Examen;
use App\Models\SessionExamen;
use App\Models\Surveillant;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class RepportingController extends Controller
{
    
    public function admin(Request $request)
    {
        $admins = Admin::with('user')->get();
        $i = 1;
        return view("admin.index", compact("admins",  "i"));

    }
    public function statistique($id)
    {
        $totalsurveillances = DB::table('surveillants as s')
    ->join('examens as e', 'e.id', '=', 's.examen_id')
    ->join('session_examens as se', 'se.id', '=', 'e.session_examens_id')
    ->where('s.user_id', '=', $id)
    ->select(DB::raw('se.id as session_id, COUNT(*) as total'))
    ->groupBy('se.id')
    ->orderBy('total', 'desc')
    ->get();
        $examens = DB::table('examens')
        ->join('surveillants', 'examens.id', '=', 'surveillants.examen_id')
        ->where('surveillants.user_id', '=', $id)
        ->select('examens.*')
        ->get();
        $i=1;
    
        return view("users.programme", compact("examens",  "i","totalsurveillances"));

    }
    public function users(Request $request)
    {
        $users = User::all();
        $i = 1;
        
        return view("users.index", compact("users",  "i"));

    }
    public function examens()
    {
        $admins = Admin::with('user')->get();
        $i = 1;
        return view("examens.index",compact("admins",  "i"));
    }
    public function examen_store(Request $request){
        
        try {
            $validated = $request->validate([
            'intitule' => 'required',
            ]);
            Examen::create([
                'intitule' => $request->intitule,
                'professeur' => $request->professeur,
                'n_local' => $request->n_local,
                'date' => $request->date,
                'heure' => $request->heure,
                'session_examens_id' => $request->session_examens_id,
            ]);
        return redirect()->back()->with('success', 'creation avec success');
        } catch (\Throwable $th) {
            dd($th);
        return redirect()->back()->with('erreur', 'error');
        }
    }

    function admin_store(Request $request)
    {
        try {
            $validated = $request->validate([
                'email' => 'required',
            ]);
            $user = User::where('email', $request->email)->first();
            if($user){
                $admin = Admin::create([
                'user_id' => $user->id,
                ]);
            }
            else{
        return redirect()->back()->with('erreur', 'mail incorrect');
            }
        return redirect()->back()->with('success', 'creation avec success');
        } catch (\Throwable $th) {
        return redirect()->back()->with('erreur', 'error');
        }
    }
    public function destroy_admin($id)
    {
        $project = Admin::findOrFail($id);
        $project->delete();
        return redirect('/administrateur');
    }
public function session()
    {
        $sessions = SessionExamen::with('user')->get();
        $i = 1;
    return view("session.index",compact("sessions",  "i"));
    }
     function session_store(Request $request)
    {
        try {
            $validated = $request->validate([

               // 'email' => 'required',
            ]);


                $session = SessionExamen::create([
                    'intitule' => $request->intitule,
                    'promotion' => $request->promotion,
                    'mention' => $request->mention,
                    'semestre' => $request->semestre,
                    'an_academique' => $request->an_academique,
                ]);






            return redirect()->back()->with('success', 'creation avec success');
        } catch (\Throwable $th) {
            dd($th );
            return redirect()->back()->with('erreur', 'error');
        }
    }
     public function session_delete($id){
        // Trouver le projet par ID
        $project = SessionExamen::findOrFail($id);

        // Supprimer le projet
        $project->delete();

        // Rediriger avec un message de succès
        return redirect()->back()->with('success', 'creation avec success');
    }
    public function session_examens($id){
        // Trouver le projet par ID
        $session = SessionExamen::findOrFail($id);
        $examens = DB::table('examens')
        ->where('examens.session_examens_id', '=', $session->id)
        
        ->select('examens.*')
        ->get();
        $i = 1;


        // Rediriger avec un message de succès
        return view("examens.index",compact("examens","i","session"));
    }

    public function surveillants($id){
        $examen = Examen::findOrFail($id);
        $surveillants = DB::table('users')
        ->leftJoin('surveillants', 'users.id', '=', 'surveillants.user_id')
        ->where('surveillants.examen_id', '=', $id)
        
        ->select('users.*', 'surveillants.id as surveillant_id')
        ->get();
    
        $users_dispo = DB::table('users')
        ->leftJoin('surveillants', 'users.id', '=', 'surveillants.user_id')
        ->where('surveillants.examen_id', '!=', $id)
        ->orWhereNull('surveillants.user_id')
        ->select('users.*')
        ->get();
       
      

        return view("surveillants.index",compact("examen","users_dispo","surveillants"));

    }
    public function surveillant_delete($id){
        
        $project = Surveillant::findOrFail($id);

        // Supprimer le projet
        $project->delete();

        // Rediriger avec un message de succès
        return redirect()->back()->with('success', 'creation avec success');
    }
    public function surveillant_store(Request $request){

        try {
            $validated = $request->validate([

               // 'email' => 'required',

            ]);




                $surveillants = Surveillant::create([
                    'user_id' => $request->user_id,
                    'examen_id' => $request->examen_id,
                ]);






            return redirect()->back()->with('success', 'creation avec success');
        } catch (\Throwable $th) {
            dd($th );
            return redirect()->back()->with('erreur', 'error');
        }


    }
    public function pvx($id){

     $examen = Examen::findOrFail($id);
     $session = SessionExamen::findOrFail($examen->id);
     $pvs = DB::table('pvs')
     ->where('pvs.examen_id', '=', $id)
     ->get();
     
     
    
    
        return view("pvx.index", compact('session','examen','pvs'));
    }
}
