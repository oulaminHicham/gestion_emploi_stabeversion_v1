@extends('espaceModel')
@section('content')
<div class="w-50 mx-auto mt-5">
    <form  action="/emploi/consulter" method="POST" >
        @csrf
        <input type="text" class="p-2 mx-2 form-control mb-3" placeholder="Entre Votre CIN" name="cin">
        <input type="text" class="p-2 mx-2 form-control mb-3" placeholder="Entre Votre Groupe" name="nom">
        <input type="submit" value="chercher" class="w-100 mx-2 mb-2 btn btn-primary mt-0">
        @foreach ($errors->all() as $error)
          <div class="mx-2 alert alert-danger">
            {{$error}}
          </div>
        @endforeach
      </form> 
</div>
@endsection