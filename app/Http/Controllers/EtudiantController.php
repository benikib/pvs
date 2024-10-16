<?php

namespace App\Http\Controllers;

use App\Models\Bulletin;
use App\Models\Etudiant;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $etudiants = Etudiant::all();
        return view('etudiants.index', compact('etudiants'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */

     public function store(Request $request)
     {

           // dd($request);
         try {
             $request->validate([
                 //'import_csv' => 'required|mimes:csv',
             ]);
             //read csv file and skip data
            // $file = $request->file('import_csv');
       $file=  DB::table('bulletins')

            ->where('promotion',  $request->promotion)
            ->where('mention',  $request->mention)
            ->where('semestre',  $request->semestre)
            ->where('an_academique', $request->an_academique)
            ->where('session',  $request->sessions)




            ->select('bulletins.*')
            ->get();





            $link = $file[0]->link;

             if (Storage::exists($link)) {
                $linkfile = Storage::path($link);
               $handle = fopen($linkfile, 'r');



                $header = fgetcsv($handle);
                //dd($header);
                $chunksize = 25;
                while(!feof($handle))
                {
                    $chunkdata = [];


                    for($i = 0; $i<$chunksize; $i++)
                    {
                        $data = fgetcsv($handle);



                        if($data === false)
                        {
                            break;
                        }
                        elseif( $data[0]== $request->nom){

                            return view('resultats.affiche', compact('header','data'));
                        }
                        $chunkdata[] = $data;

                    }

                    $this->getchunkdata($chunkdata);
                }

                fclose($handle);

                // Lire le contenu du fichier
                // Par exemple, si c'est un fichier texte
                return redirect()->back()->with('error', 'etudiant non trouvé');
            } else {
                return redirect()->back()->with('error', 'voir le bureau du jury');
                // dd("Fichier non trouvé !");
            }

        // dd($chunkdata);
            // return redirect()->route('import.members')->with('success', 'Data has been added successfully.');
         } catch (\Exception $e) {
            dd($e);
            return redirect()->back()->with('error', 'veuillez recommencer');
             //return redirect()->route('import.members')->with('error', "Une érreur s'est produite");
         }
     }
     public function getchunkdata($chunkdata)
     {
         foreach($chunkdata as $column){
              $name = $column[0];
              $cours  = $column[1];
              $total = $column[2];



              //$existingMember = CourseraMember::where('email', $email)->first();


         }
     }

    /**
     * Display the specified resource.
     */
    public function show(Etudiant $etudiant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Etudiant $etudiant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Etudiant $etudiant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Etudiant $etudiant)
    {
        //
    }
}