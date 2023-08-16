@extends('base')

@section('title', 'La montre')
    


@section('content')
    
    <article class="d-flex flex-row">
        <img class="border-primary mb-3 w-50 .img-thumbnail rounded" src="{{ $watch->picture }}" alt="photo">
    <div class="align-middle">
        <h2> Marque : {{ $watch->brand }} </h2>
        <h3> Nom du modèle : {{ $watch->name }} </h3>
        <p> prix : {{ $watch->price }} €</p>
        <p> Année : {{ $watch->date }} </p>
        <p> Complications : </p>
        <a href="">Ajouter au favoris</a>
    </div>
    </article>
    
@endsection