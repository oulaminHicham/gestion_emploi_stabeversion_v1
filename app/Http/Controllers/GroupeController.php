<?php

namespace App\Http\Controllers;

use App\Models\Filiere;
use App\Models\Groupe;
use Illuminate\Http\Request;

class GroupeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $groupes = Groupe::all();
        return view('Groupes.index' , compact('groupes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $filieres = Filiere::all();
        return view('Groupes.create' , compact('filieres'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom'=>'required|unique:groupes|max:10' ,
            'specialite'=>'required|max:30',
            'filiere_id'=>'required'
        ]);
        Groupe::create([
            "nom"=>$request->nom ,
            "specialite"=>$request->specialite,
            "filiere_id"=>$request->filiere_id
        ]);
        return to_route('Groupes.index');
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function show($id){
        $groupe = Groupe::find($id);
        $emplois = $groupe->emplois;
        return view('Groupes.show' , compact('groupe', 'emplois'));
    }


    //
    public function edit(string $id)
    {
        $groupe = Groupe::find($id);
        $filieres=Filiere::all();
        return view('Groupes.edit',compact('groupe' , 'filieres'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nom'=>'required|max:10' ,
            'specialite'=>'required|max:30',
            'filiere_id'=>'required'
        ]);
        $groupe = Groupe::find($id);
        $groupe->update($request->all());
        return to_route('Groupes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $groupe = Groupe::find($id);
        $groupe->delete();
        return to_route('Groupes.index');
    }
}
