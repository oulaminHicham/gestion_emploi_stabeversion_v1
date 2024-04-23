<?php

namespace App\Http\Controllers;

use App\Models\Module;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $modules = Module::all();
        return view('Modules.index' , compact('modules'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('Modules.create');
    }
    //////////////////////////
    public function store(Request $request){
        $request->validate([
            'nom'=>['required' , 'unique:modules'],
            'nembre_heur'=>['required']
        ]);
        Module::create([
            'nom'=>$request->nom ,
            'nembre_heur'=>$request->nembre_heur
        ]);
        return to_route('Modules.index');
    }
    //
    public function edit(string $id)
    {
        $module = Module::find($id);
        return view('Modules.edit' , compact('module'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nom'=>['required'],
            'nembre_heur'=>['required']
        ]);
        $module = Module::find($id);
        $module->update($request->all());
        return to_route('Modules.index');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $module = Module::find($id);
        $module->delete();
        return to_route('Modules.index');
    }
}
