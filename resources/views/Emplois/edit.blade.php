@extends('layout')
@section('title' , 'edit emploi')
@section('content')
<div class="w-50 mx-auto mt-5 bg-dark text-white p-4 rounded-4 mb-4">
    <h5 class="text-blac mb-4">Ajoute emploi</h5>
    <form action="{{route('Emploi.update' , $emploi->id)}}" method="POST">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="name" class="form-label">descreption</label>
            <input type="text" class="form-control" id="name" name="descreption" value="{{$emploi->descreption}}">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">groupe</label>
            <select class="form-select" aria-label="Default select example" name="groupe_id">
                <option selected>choisi un joure</option>
                @foreach ($groupes as $groupe)
                <option @selected( $groupe->id == $emploi->groupe_id) value="{{$groupe->id}}">{{$groupe->nom}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Joure</label>
            <select class="form-select" aria-label="Default select example" name="joure">
                <option selected>choisi un joure</option>
                @foreach ($joures as $joure)
                <option @selected( $joure == $emploi->joure) value="{{$joure->joure}}">{{$joure->joure}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Horaire</label>
            <select class="form-select" aria-label="Default select example" name="horaire">
                <option selected>choisi l'horaire</option>
                @foreach ($horaires as $horaire)
                <option @selected( $horaire == $emploi->horaire) value="{{$horaire->horaire}}">{{$horaire->horaire}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">salle</label>
            <select class="form-select" aria-label="Default select example" name="salle_id">
                <option selected>choisi la salle</option>
                @foreach ($salles as $salle)
                <option @selected( $salle->id == $emploi->salle_id) value="{{$salle->id}}">{{$salle->numSalle}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Module</label>
            <select class="form-select" aria-label="Default select example" name="module_id">
                <option selected>choisi le  module</option>
                @foreach ($modules as $module)
                <option @selected( $module->id == $emploi->module_id) value="{{$module->id}}">{{$module->nom}}</option>
                @endforeach
            </select>
        </div>        
        <input type="submit" value="Modifie" class="btn btn-primary w-100 mt-3">
        <div class="mt-3">
            @foreach ($errors->all() as $err)
                <div class="alert alert-danger">{{$err}}</div>
            @endforeach
        </div>
    </form>
</div>
@endsection
