@extends('layout')
@section('title' , 'filieres')
@section('content')
<div class="container d-flex justify-content-between mt-5">
    <h4>Liste Des Filieres</h4>
    <a href="{{route('Filieres.create')}}" class="btn btn-success w-25">Ajouter Filiere</a>
</div>
<table class="table table-striped container mt-3">
   <thead>
    <tr>
        <th>Nom</th>
        <th>descreption</th>
        <th class="text-end">Actions</th>
    </tr>
   </thead>
   <tbody>
    @foreach ($filieres as $filiere)
        <tr>
            <td>{{$filiere->nom}}</td>
            <td>{{$filiere->descreption}}</td>
            <td class="text-end">
                <a href="{{route('Filieres.edit',$filiere->id)}}" class="btn btn-success text-white">Edit</a>
                <form class="d-inline" action="{{route('Filieres.destroy',$filiere->id)}}" method="POST">
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
    
