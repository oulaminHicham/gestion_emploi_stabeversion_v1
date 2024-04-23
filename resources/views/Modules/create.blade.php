@extends('layout')
@section('title' , 'create module')
@section('content')
<div class="w-50 mx-auto mt-5 bg-dark text-white p-4 rounded-4">
    <h5 class="text-blac mb-4">Ajouter Module</h5>
    <form action="{{route('Modules.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nom</label>
            <input type="text" class="form-control" id="name" name="nom">
        </div>
        <div class="mb-3">
            <label for="prenom" class="form-label">nembre heur</label>
            <input type="text" class="form-control" id="prenom" name="nembre_heur">
        </div>
        <input type="submit" value="Ajouer" class="btn btn-primary w-100 mt-3">
        <div class="mt-3">
            @foreach ($errors->all() as $err)
                <div class="alert alert-danger">{{$err}}</div>
            @endforeach
        </div>
    </form>
</div>
@endsection