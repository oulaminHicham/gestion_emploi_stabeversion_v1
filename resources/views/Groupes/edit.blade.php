@extends('layout')
@section('title')
    Modufie groupe
@endsection
@section('content')
<div class="w-50 mx-auto mt-5 bg-dark text-white p-4 rounded-4">
    <h5 class="text-blac mb-4">Modifie Groupe</h5>
    <form action="{{route('Groupes.update' , $groupe->id)}}" method="POST">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="name" class="form-label">Nom</label>
            <input type="text" class="form-control" id="name" name="nom" value="{{$groupe->nom}}">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">specialite</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="specialite">{{$groupe->specialite}}</textarea>
        </div>
        <select class="form-select" aria-label="Default select example" name="filiere_id">
            <option selected>Open this select menu</option>
            @foreach ($filieres as $filiere)
                <option @selected($filiere->id ==$groupe->filiere_id) value="{{$filiere->id}}">{{$filiere->nom}}</option>
            @endforeach>
          </select>
        <input type="submit" value="modifie" class="btn btn-primary w-100 mt-3">
        <div class="mt-4"> 
            @foreach ($errors->all() as $err)
                <div class="alert alert-danger">{{$err}}</div>
            @endforeach
        </div>
    </form>
</div>
@endsection