<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>@yield('title')Watches</title>
</head>
<header>
<div>
  <h1 class="text-center">Watches</h1>
</div>
  <hr>
    <nav>
    <ul class="nav justify-content-end">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('watches.index')}}">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('login')}}">{{ __('Se connecter') }}</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('register')}}">{{ __('S\'inscrire') }}</a>
        </li>
      </ul>
      <hr>
    </nav>
</header>
<body>
    
    <div class="container">
        @yield('content')
    </div>
</body>
</html>