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
                'session_examens_id' => 1,
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
        $examens = Examen::all();
        // Supprimer le projet
        $i = 1;


        // Rediriger avec un message de succès
        return view("examens.index",compact("examens","i","session"));
    }

    public function surveillants($id){
        $examen = Examen::findOrFail($id);
        $surveillants = Surveillant::all();
        $users_dispo = DB::table('users')
        ->leftJoin('surveillants', 'users.id', '=', 'surveillants.user_id')
        ->where('surveillants.examen_id', '!=', $id)
        ->orWhereNull('surveillants.user_id')
        ->select('users.*')
        ->get();
       
      

        return view("surveillants.index",compact("examen","users_dispo","surveillants"));

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
    public function pvx(){
        return view("pvx.index");
    }
}
