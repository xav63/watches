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
<div class="text-center mx-auto text-xs">
  <h1 class="text-center">Watches</h1>
</div>
  <hr>
    <nav>
    <ul class="nav justify-content-end">
      
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('watches.index')}}">Accueil</a>
        </li>
        {{-- Connection --}}
        @auth
        <li>
          <a class="nav-link" href="{{ route('dashboard') }}">
          {{ Auth::user()->name }}
          </a>
        </li>
        <li>
          <a class="nav-link active" aria-current="page" href="{{route('dashboard')}}">favoris</a>
        </li>
        <li>
          <!-- Authentication -->
          <form method="POST" action="{{ route('logout') }}">
            @csrf

            <a class="nav-link" href="route('logout')"
                    onclick="event.preventDefault();
                                this.closest('form').submit();">
                {{ __('se déconnecter') }}
            </a>
        </form>
        </li>
        </li>
        @else
        <li class="nav-item">
          <a class="nav-link" href="{{route('login')}}">{{ __('Se connecter') }}</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('register')}}">{{ __('S\'inscrire') }}</a>
        </li>
        @endauth
      </ul>
      
      <hr>
    </nav>
</header>
<body>
  
  {{-- <div class="d-flex justify-content-center container">
    <select class="form-select" aria-label="Default select example">
      <option selected>choisir une complication</option>
      <option value="Phase de lune">Phase de lune</option>
      <option value="Seconde rattrapante">Seconde rattrapante</option>
      <option value="Quantième">Quantième</option>
      <option value="Heure sautante">Heure sautante</option>
    </select>
  </div> --}}
  <br>
    <div class="container">
      {{-- Barre de recherche --}}
  <form action="{{ route('search')}}" method="GET" class="form-inline my-2 my-lg-0 d-flex justify-content-center container">
    <input id='search' class="form-control mr-sm-2" type="search" name="search" placeholder="Rechercher une marque, un modèle ou une complication" >
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
  </form>
  @if($watches->isNotEmpty())
    @foreach ($watches as $watch)
        
    @endforeach
  @else 
    <div>
        <h3 class="container text-center">Pas de résultats</h3>
    </div>
@endif
        @yield('content')
    </div>
    <hr>
</body>
<footer>
  <div class="d-flex justify-content-end">
  <p>Copyright XS</p>
</div>
</footer>
</html>