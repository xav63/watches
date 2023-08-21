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
        
        
        
        @auth
        <a href='{{ route('watches.favoris', $watch) }}' class="btn btn-primary">Ajouter aux favoris</a><br>
        <a href="{{ route('watches.edit', $watch) }}" class="btn btn-success">Modifier</a><br>
        <form method="POST" action="{{ route('watches.destroy', $watch) }}">
            @csrf
            @method('delete')
            <button
                type="submit"
                class="btn btn-danger"
                href="{{ route('watches.destroy', $watch) }}"
            >Supprimer</button>
        </form>
        @endauth
    </div>
   
    </article>
    
@endsection
