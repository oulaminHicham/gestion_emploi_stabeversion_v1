@extends('layout')
@section('title' , 'Modules')
@section('content')
<div class="container d-flex justify-content-between mt-5">
    <h4>Liste Des Modules</h4>
    <a href="{{route('Modules.create')}}" class="btn btn-success w-25">Ajouter Module</a>
</div>
<table class="table table-dark table-striped container mt-4 ">
   <thead>
    <tr>
        <th>Nom</th>
        <th>Nembre Heur</th>
        <th class="text-end">Actions</th>
    </tr>
   </thead>
   <tbody>
    @foreach ($modules as $module)
        <tr>
            <td>{{$module->nom}}</td>
            <td>{{$module->nembre_heur}}</td>
            <td class="text-end">
                <a href="{{route('Modules.edit',$module->id)}}" class="btn btn-success text-white">Edit</a>
                <form class="d-inline" action="{{route('Modules.destroy',$module->id)}}" method="POST">
                    @csrf
                    @method('delete')
                    <input type="submit" class="btn btn-danger" value="Delete">
                </form>
            </td>
        </tr>
    @endforeach
   </tbody>
</table>
@endsection
    
