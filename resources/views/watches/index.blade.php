@extends('base')

@section('title', 'Accueil')
    


@section('content')
    {{-- Les accolades font automatiquement de l'échappement et évite ainsi d'insérer des scripts  --}}
    <div class="d-flex flex-wrap justify-content-center">
      
      @foreach($watches as $watch)
        <x-watch.card :$watch />
      @endforeach
    </div>

 
@endsection