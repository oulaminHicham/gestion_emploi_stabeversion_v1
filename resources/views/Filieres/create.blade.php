@extends('layout')
@section('title' , 'create filiere')
@section('content')
<div class="w-50 mx-auto mt-5 bg-dark text-white p-4 rounded-4">
    <h5 class="text-blac mb-4">Ajoute Filiere</h5>
    <form action="{{route('Filieres.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nom</label>
            <input type="text" class="form-control" id="name" name="nom">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">descreption</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="descreption"></textarea>
        </div>
        <input type="submit" value="Ajouer" class="btn btn-primary w-100 mt-3">
        @foreach ($errors->all() as $err)
            <div class="alert alert-danger mt-3">{{$err}}</div>
        @endforeach
    </form>
</div>
@endsection
