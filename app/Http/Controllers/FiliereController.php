<?php

namespace App\Http\Controllers;

use App\Models\Filiere;
use App\Models\Groupe;
use Illuminate\Http\Request;

class FiliereController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $filieres = Filiere::all();
        return view('Filieres.index' , compact('filieres'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $groupes = Groupe::all();
        return view("Filieres.create" , compact('groupes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request ->validate([
            "nom"=>'required|max:20|unique:filieres' ,
            "descreption"=>'required|max:100'
        ]);
        Filiere::create([
            "nom"=>$request->nom ,
            "descreption"=>$request->descreption,
        ]);
        return to_route('Filieres.index');
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $filiere = Filiere::find($id);
        return view('Filieres.edit' ,['filiere'=>$filiere]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $filiere = Filiere::find($id);
        $filiere->update($request->all());
        return to_route('Filieres.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $filiere = Filiere::find($id);
        $filiere->delete();
        return to_route('Filieres.index');
    }
}
