<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{url('bootstrap.min.css')}}">
    <style>
        .main--page{
            background-image: url('imgs/fssm1.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }
        img{
            width: 80px;
            height: 80px;
            border-radius: 50%;
        }
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <link href="cover.css" rel="stylesheet">
  </head>
  <body class="h-100">
    @yield('content')
  </body>
</html>
