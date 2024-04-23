@extends('layout')
@section('title' , 'create emploi')
@section('content')
<div class="w-50 mx-auto mt-5 bg-dark text-white p-4 rounded-4 mb-4">
    <h5 class="text-blac mb-4">Ajoute emploi</h5>
    <form action="{{route('Emploi.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">descreption</label>
            <input type="text" class="form-control" id="name" name="descreption">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">groupe</label>
            <select class="form-select" aria-label="Default select example" name="groupe_id">
                @foreach ($groupes as $groupe)
                    <option value="{{$groupe->id}}">{{$groupe->nom}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Joure</label>
            <select class="form-select" aria-label="Default select example" name="joure">
                @foreach ($joures as $joure)
                <option value="{{$joure->joure}}">{{$joure->joure}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Horaire</label>
            <select class="form-select" aria-label="Default select example" name="horaire">
                @foreach ($horaires as $horaire)
                <option value="{{$horaire->horaire}}">{{$horaire->horaire}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">salle</label>
            <select class="form-select" aria-label="Default select example" name="salle_id">
                @foreach ($salles as $salle)
                <option value="{{$salle->id}}">{{$salle->numSalle}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Module</label>
            <select class="form-select" aria-label="Default select example" name="module_id">
                @foreach ($modules as $module)
                <option value="{{$module->id}}">{{$module->nom}}</option>
                @endforeach
            </select>
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
