@extends('base')

@section('title', 'Accueil')
    


@section('content')
    
    <div class="d-flex flex-wrap justify-content-center">
      
      @foreach($watches as $watch)
        <x-watch.card :$watch />
      @endforeach
    </div>

 
@endsection