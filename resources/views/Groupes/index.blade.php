@extends('layout')
@section('title')
    Groupes
@endsection
@section('content')
<div class="container d-flex justify-content-between mt-5">
    <h4>Liste Des Groupes</h4>
    <a href="{{route('Groupes.create')}}" class="btn btn-success w-25">Ajouter Groupe</a>
</div>
<table class="table table-striped container mt-3">
   <thead>
    <tr>
        <th>Nom</th>
        <th>specialite</th>
        <th>Filiere</th>
        <th class="text-end">Actions</th>
    </tr>
   </thead>
   <tbody>
    @foreach ($groupes as $groupe)
        <tr>
            <td>{{$groupe->nom}}</td>
            <td>{{$groupe->specialite}}</td>
            <td>{{$groupe->filiere->nom}}</td>
            <td class="text-end">
                <a href="{{route('Groupes.edit',$groupe->id)}}" class="btn btn-success text-white">Edit</a>
                <form class="d-inline" action="{{route('Groupes.destroy',$groupe->id)}}" method="POST">
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