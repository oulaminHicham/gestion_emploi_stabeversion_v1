@extends('layout')
@section('title' , 'Emploi du tempes')
@section('content')
   <div class="container mt-5">
    <h4 class="mb-4">Emploi de Groupe {{$groupe->nom}}</h4>
        <table class="table table-striped">
        <thead>
            <tr>
                <th>joure</th>
                <th>hoarire</th>
                <th>salle</th>
                <th>module</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($emplois as $emploi)
                <tr>
                    <td>{{$emploi->joure}}</td>
                    <td>{{$emploi->horaire}}</td>
                    <td>{{$emploi->salle->numSalle}}</td>
                    <td>{{$emploi->module->nom}}</td>
                    <td>
                        <a href="{{route('Emploi.edit' , $emploi->id)}}" class="btn btn-success">Edit</a>
                        <form class="d-inline" action="{{route('Emploi.destroy' , $emploi->id)}}" method="POST">
                            @csrf
                            @method('delete')
                            <input type="submit" value="delete" class="btn btn-danger" >
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
        </table>
   </div>
@endsection
    
