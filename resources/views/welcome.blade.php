@extends('espaceModel')
@section('content')
  <nav class="navbar navbar-expand-sm navbar-dark" style="background-color: #989da1">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="{{url('imgs/logo2.jfif')}}" alt="logo">
      </a>
    </div>
    <ul class="navbar-nav">
     <li class="nav-item" style="min-width: 200px">
        <a class="nav-link btn btn-primary mx-2" href="{{route('espaceEtud')}}">Espace Etudient</a>
      </li>
      <li class="nav-item" style="min-width: 200px">
        <a class="nav-link btn btn-success" href="{{route('adminPage')}}">Espace Admin</a>
      </li>
    </ul>
  </nav>
    <div class="d-flex h-100 text-center text-white main--page">
      {{-- <div class="cover-container d-flex w-100 h-100 p-3 mx-auto align-items-center justify-content-center" style="height: 100%;">
        <main class="px-3">
          <h1>Gestion D'emploi</h1>
          <p class="lead">Votre Aplication de gestion d'emploi pour facilite votre parcore socolaire</p>
      
        </main>
      </div> --}}
    </div>
@endsection