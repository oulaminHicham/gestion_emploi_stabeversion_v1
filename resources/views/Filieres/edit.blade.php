@extends('layout')
@section('title' , 'edit')
@section('content')
<div class="w-50 mx-auto mt-5 bg-dark text-white p-4 rounded-4">
    <h5 class="text-blac mb-4">Edit Filiere</h5>
    <form action="{{route('Filieres.update' ,$filiere->id )}}" method="POST">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="name" class="form-label">Nom</label>
            <input type="text" class="form-control" id="name" name="nom" value="{{$filiere->nom}}">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">descreption</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="descreption">{{$filiere->descreption}}</textarea>
        </div>
        <input type="submit" value="Modifie" class="btn btn-primary w-100 mt-3">
    </form>
</div>
@endsection