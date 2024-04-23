@extends('layout')
@section('title' , 'create etudient')
@section('content')
<div class="w-50 mx-auto mt-5 bg-dark text-white p-4 rounded-4">
    <h5 class="text-blac mb-4">Ajouter Etudient</h5>
    <form action="{{route('Etudients.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nom</label>
            <input type="text" class="form-control" id="name" name="nom" value="{{old('nom')}}">
        </div>
        <div class="mb-3">
            <label for="prenom" class="form-label">Prenom</label>
            <input type="text" class="form-control" id="prenom" name="prenom"value="{{old('prenom')}}">
        </div>
        <div class="mb-3">
            <label for="prenom" class="form-label">Date De Naissance</label>
            <input type="date" class="form-control" id="prenom" name="dateNaissance" value="{{old('dateNaissance')}}">
        </div>
        <div class="mb-3">
            <label for="prenom" class="form-label">Lieu De Naissance</label>
            <input type="text" class="form-control" id="prenom" name="lieuNaissance" value="{{old('lieuNaissance')}}" >
        </div>
        <div class="mb-3">
            <label for="cin" class="form-label">CIN</label>
            <input type="text" class="form-control" id="cin" name="cin" value="{{old('cin')}}">
        </div>
        <div class="mb-3">
            <label for="cin" class="form-label">Num Massare</label>
            <input type="text" class="form-control" id="cin" name="num_massare" value="{{old('num_massare')}}">
        </div>
        <div class="">
            <label for="cin" class="form-label">Apogee</label>
            <input type="text" class="form-control" id="cin" name="apogee"  value="{{old('apogee')}}">
        </div><br/>
        <label for="cin" class="form-label">Groupe</label>
        <select class="form-select" multiple aria-label="multiple select example" name="groupe_id">
            @foreach ($groupes as $groupe)
                <option value="{{$groupe->id}}">{{$groupe->nom}}</option>
            @endforeach
          </select>
        <input type="submit" value="Ajouer" class="btn btn-primary w-100 mt-3">
        <div class="mt-3">
            @foreach ($errors->all() as $err)
                <div class="alert alert-danger">{{$err}}</div>
            @endforeach
        </div>
    </form>
</div>
@endsection
