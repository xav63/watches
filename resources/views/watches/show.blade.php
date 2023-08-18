@extends('base')

@section('title', 'La montre')
    


@section('content')
    
    <article class="d-flex flex-row">
        <img class="card-img-top mx-auto img-thumbnail w-50" src="{{ $watch->picture ? asset('storage/' . $watch->picture) : 'https://placehold.co/600x400' }}" alt="Card image cap">
    <div class="align-middle">
        <h2> Marque : {{ $watch->brand }} </h2>
        <h3> Nom du modèle : {{ $watch->name }} </h3>
        <p> Prix : {{ $watch->price }} €</p>
        <p> Année : {{ $watch->date }} </p>
        <p> Complications : 
            @foreach($watch->complications as $complication)
            {{ $complication->complication }}
            <br>
            @endforeach
        </p>
        
        <button type="button" class="btn btn-primary " href='{{ route('watches.favoris', $watch) }}'>Ajouter aux favoris</button><br>
        @auth
        <button type="button" class="btn btn-success" href='{{ route('watches.edit', $watch) }}'>Modifier</button><br>
        <button type="button" class="btn btn-danger" href=''>Supprimer</button>
        @endauth
    </div>
   
    </article>
    
@endsection
