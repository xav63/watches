<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    
    <link rel="stylesheet" href="{{ asset('/style.css') }}">

    <title>@yield('title')</title>
</head>
<header>
    <div class="text-center mx-auto text-xs">
        <h1 class="text-center">Watches</h1>
    </div>
    <hr>
    <nav class="navbar navbar-expand-sm navbar-light bg-light">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarTogglerDemo01">

            <ul class="nav justify-content-end nav-expand-sm">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('watches.index') }}">Accueil</a>
                </li>
                {{-- Connection --}}
                @auth
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard') }}">
                            {{ Auth::user()->name }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('dashboard') }}">favoris</a>
                    </li>
                    <li class="nav-item">
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
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Se connecter') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('S\'inscrire') }}</a>
                    </li>
                @endauth
            </ul>
        </div>
    </nav>
    
</header>

<body>
    
    <hr>
    <br>
    <div class="container">
        {{-- Barre de recherche --}}
        <form action="{{ route('search') }}" method="GET"
            class="form-inline my-2 my-lg-0 d-flex justify-content-center container">
            <input id='search' class="form-control mr-sm-2" type="search" name="search"
                placeholder="Rechercher une marque ou un modèle">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
        </form>
        {{-- Message en cas de non résultat --}}
        {{-- @if ($watches->isNotEmpty())
    @foreach ($watches as $watch)
      
    @endforeach
  @else 
    <div>
        <h3 class="container text-center">Pas de résultats</h3>
    </div>
  @endif --}}
        <div>
            @yield('content')
        </div>
        <hr>
</body>
<footer>
    <div class="d-flex justify-content-end">
        <p>Copyright XS</p>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</html>
