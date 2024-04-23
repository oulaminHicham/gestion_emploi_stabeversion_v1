<?php

namespace App\Http\Controllers;

use App\Models\Etudient;
use App\Models\Groupe;
use Illuminate\Http\Request;

class EtudientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $etudients = Etudient::all();
        return view('Etudients.index' , compact('etudients'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $groupes = Groupe::all();
        return view('Etudients.create' , compact('groupes'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom'=>['required' , 'max:20'],
            'prenom'=>['required' , 'max:20'],
            'cin'=>['required' , 'min:8','max:8' , 'unique:etudients'],
            'groupe_id'=>['required'],
            'dateNaissance'=>['required' , 'date'],
            'lieuNaissance'=>['required' , 'max:30'],
            'num_massare'=>['required' , 'min:10' , 'max:10' , 'unique:etudients'],
            'apogee'=>['required' , 'min:6' , 'max:10' ,'unique:etudients']
        ]);
        $etudients = new Etudient();
        $etudients->create($request->all());
        return  to_route('Etudients.index');
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $etudient = Etudient::find($id);
        $groupes = Groupe::all();
        return view('Etudients.edit' , compact('etudient' , 'groupes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nom'=>['required' , 'max:20'],
            'prenom'=>['required' , 'max:20'],
            'cin'=>['required' , 'max:8'],
            'groupe_id'=>['required'],
        ]);
        $etudient = Etudient::find($id);
        $etudient->update($request->all());
        return  to_route('Etudients.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $etud = Etudient::find($id);
        $etud->delete();
        return  to_route('Etudients.index');
    }
}
