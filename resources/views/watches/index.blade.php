@extends('base')

@section('title', 'Accueil')
    


@section('content')
    {{-- Les accolades font automatiquement de l'échappement et évite ainsi d'insérer des scripts  --}}
        @foreach($watch as $watch)
            
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{$watch->picture}}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">{{ $watch->brand}}</h5>
                  <p class="card-text">{{$watch->name}}</p>
                  <a href="{{ route('watches.show', $watch) }}" class="btn btn-primary">En savoir plus</a>
                </div>
              </div>

        @endforeach

 
@endsection