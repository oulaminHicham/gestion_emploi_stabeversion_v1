@extends('layout')
@section('title' , 'Emploi du tempes')
@section('content')
<div class="container d-flex justify-content-between mt-5">
    <h4>Liste Des Des Emplois</h4>
    <a href="{{route('Emploi.create')}}" class="btn btn-success w-25">Ajouter Emploi</a>
</div>
<table class="table table-success table-striped container mt-4 ">
   <thead>
    <tr>
        <th>Groupe</th>
        <th class="text-end">Consulter l'emploi</th>
    </tr>
   </thead>
   <tbody>
    @foreach ($groupes as $groupe)
        <tr>
            <td>{{$groupe->nom}}</td>
            <td class="text-end">
                <a href="{{route('Groupes.show',$groupe->id)}}" class="btn btn-success text-white">Consulter</a>
            </td>
        </tr>
    @endforeach
   </tbody>
</table>
@endsection
    
