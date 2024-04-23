<?php

namespace App\Http\Controllers;

use App\Models\Emploi_tempe;
use App\Models\Groupe;
use App\Models\Horaire;
use App\Models\Joure;
use App\Models\Module;
use App\Models\Salle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Emploi_tempeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $groupes = Groupe::all();
        return view('Emplois.index' , compact('groupes'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $joures = Joure::all();
        $horaires = Horaire::all();
        $salles = Salle::all();
        $groupes = Groupe::all();
        $modules = Module::all();
        return view('Emplois.create' , compact('joures' , 'horaires' , 'salles' , 'groupes' , 'modules'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'descreption'=>['required' , 'max:20'],
            'groupe_id'=>['required'],
            'joure'=>['required'],
            'salle_id'=>['required'],
            'groupe_id'=>['required'],
            'horaire'=>['required'],
            'module_id'=>['required']
        ]);
        $emploi = new Emploi_tempe();
        $emploi->create($request->all());
        return to_route('Emploi.index');
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $joures = Joure::all();
        $horaires = Horaire::all();
        $salles = Salle::all();
        $groupes = Groupe::all();
        $modules = Module::all();
        $emploi = Emploi_tempe::find($id);
        return view('Emplois.edit' ,compact('emploi','joures' , 'horaires' , 'salles' , 'groupes' , 'modules'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'descreption'=>['required' , 'max:20'],
            'groupe_id'=>['required'],
            'joure'=>['required'],
            'salle_id'=>['required'],
            'groupe_id'=>['required'],
            'horaire'=>['required'],
            'module_id'=>['required']
        ]);
        $emploi = Emploi_tempe::find($id);
        $emploi->update($request->all());
        return to_route('Groupes.show',$emploi->id);
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $emploi = Emploi_tempe::find($id);
        $emploi->delete();
        return to_route('Emploi.index');
    }
       /**
     * receive the groupe name and affect query to database to return the emploi of the given roupe
     */
    public function getEmploi(Request $request){
        $request->validate([
            'cin'=>'exists:etudients|required|max:8|min:8',
            'nom'=>'required|exists:groupes'
        ]);
        $groupeRechercher = $request->nom;
        $groupes = Groupe::query();
        // select the groupe match the request groupe
        $groupes = $groupes->where('nom', '=', $groupeRechercher);
        $groupes = $groupes->get();
        // from here is testing
        $empolois = Emploi_tempe::where('groupe_id' , $groupes[0]->id)->get();
        return view('emploi' , compact('empolois'));
    }
}