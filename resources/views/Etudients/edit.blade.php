@extends('layout')
@section('title' , 'edit Etudient')
@section('content')
<div class="w-50 mx-auto mt-5 bg-dark text-white p-4 rounded-4">
    <h5 class="text-blac mb-4">Ajouter Etudient</h5>
    <form action="{{route('Etudients.update' , $etudient->id)}}" method="POST">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="name" class="form-label">Nom</label>
            <input type="text" class="form-control" id="name" name="nom" value="{{$etudient->nom}}">
        </div>
        <div class="mb-3">
            <label for="prenom" class="form-label">Prenom</label>
            <input type="text" class="form-control" id="prenom" name="prenom" value="{{$etudient->prenom}}">
        </div>
        <div class="mb-3">
            <label for="cin" class="form-label">CIN</label>
            <input type="text" class="form-control" id="cin" name="cin" value="{{$etudient->cin}}">
        </div>
        <select class="form-select" multiple aria-label="multiple select example" name="groupe_id">
            <option selected>Open this select menu</option>
            @foreach ($groupes as $groupe)
                
                <option @selected($groupe->id == $etudient->groupe_id) value="{{$groupe->id}}">{{$groupe->nom}}</option>
            @endforeach
          </select>
        <input type="submit" value="Modifie" class="btn btn-primary w-100 mt-3">
        <div class="mt-3">
            @foreach ($errors->all() as $err)
                <div class="alert alert-danger">{{$err}}</div>
            @endforeach
        </div>
    </form>
</div>
@endsection