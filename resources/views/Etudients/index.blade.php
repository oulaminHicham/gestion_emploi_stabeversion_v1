@extends('layout')
@section('title' , 'Etudients')
@section('content')
<div class="container d-flex justify-content-between mt-5">
    <h4>Liste Des Etudients</h4>
    <a href="{{route('Etudients.create')}}" class="btn btn-success w-25">Ajouter Etudient</a>
</div>
<table class="table table-primary table-striped container mt-4 ">
   <thead class="table-dark">
    <tr>
        <th>Nom</th>
        <th>Prenom</th>
        <th>cin</th>
        <th>groupe</th>
        <th>Date Naissance</th>
        <th>Lieu Naissance</th>
        <th>Num Massare</th>
        <th>Apogee</th>
        <th class="text-end">Actions</th>
    </tr>
   </thead>
   <tbody>
    @foreach ($etudients as $etudient)
        <tr>
            <td>{{$etudient->nom}}</td>
            <td>{{$etudient->prenom}}</td>
            <td>{{$etudient->cin}}</td>
            <td>{{$etudient->groupe->nom}}</td>
            <td>{{$etudient->dateNaissance}}</td>
            <td>{{$etudient->lieuNaissance}}</td>
            <td>{{$etudient->num_massare}}</td>
            <td>{{$etudient->apogee}}</td>
            <td class="text-end">
                <a href="{{route('Etudients.edit',$etudient->id)}}" class="btn btn-success text-white">Edit</a>
                <form class="d-inline" action="{{route('Etudients.destroy',$etudient->id)}}" method="POST">
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
    
