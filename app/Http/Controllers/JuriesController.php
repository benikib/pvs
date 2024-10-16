<?php

namespace App\Http\Controllers;

use App\Models\Bulletin;
use App\Models\Juries;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JuriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bulletins = Bulletin::all();
        return view('resultats.index');

        //return view('juries.index', compact('bulletins'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('juries.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
          //  dd($request->promotion);
            $validated = $request->validate([

               // 'email' => 'required',
            ]);
            if ($request->hasFile('link')) {
                // Récupérer le fichier de la requête
                $file = $request->file('link');

                // Obtenir le nom original du fichier
                $fileName = $file->getClientOriginalName();

                // Stocker le fichier dans un répertoire spécifique (par exemple, 'uploads')
                $filePath = $file->storeAs('uploads', $fileName);

                $bulletin = Bulletin::create([
                    //'jurie_id' => Auth::user()->id,
                    'promotion' => $request->promotion,
                    'mention' => $request->mention,
                    'semestre' => $request->semestre,
                    'session' => $request->sessions,
                    'an_academique' => $request->an_academique,
                    'link' =>$filePath,
                ]);

                return redirect()->back()->with('success', 'creation avec success');
            }


            return redirect()->back()->with('success', 'creation avec success');






        } catch (\Throwable $th) {
            dd($th );
            return redirect()->back()->with('erreur', 'error');
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Juries $juries)
    {
        $juries = Bulletin::find($juries->id);
        return view('juries.show', compact('juries'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Juries $juries)
    {
        return view('juries.edit', compact('juries'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Juries $juries)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Juries $juries)
    {
        return redirect()->back()->with('success', 'creation avec success');
    }

}
