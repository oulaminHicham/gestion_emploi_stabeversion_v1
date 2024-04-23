<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{url('bootstrap.min.css')}}">
    <title>@yield('title')</title>
</head>
<body>
    <nav class="navbar navbar-expand-sm" style="background-color:#e3f2fd ">
        <div class="container-fluid justify-content-end">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">Gestion D'emploi</a>
            </div>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link mx-2" href="{{route('Filieres.index')}}">Filiere</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-2" href="{{route('Groupes.index')}}">Groupes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-2" href="{{route('Etudients.index')}}">Etudients</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-2" href="{{route('Modules.index')}}">Modules</a>
              </li>
              <li class="nav-item" style="min-width: 150px">
                <a class="nav-link mx-2" href="{{route('Emploi.index')}}">Emplois Tempes</a>
              </li>
            </ul>
          </div>
    </nav>
    <div>
        @yield('content')
    </div>
</body>
</html>