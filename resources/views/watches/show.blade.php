@extends('base')

@section('title', 'La montre')
    


@section('content')
    <br>
    <article class="d-flex flex-row">
    <div class="card-img-top mx-auto w-50">
        <img class="img-thumbnail img-fluid" src="{{ $watch->picture ? asset('storage/' . $watch->picture) : 'https://placehold.co/600x400' }}" alt="Card image cap">
    </div>
    <blockquote class="blockquote text-bottom"> 
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
       
        {{-- <form method="GET" enctype="multipart/form-data"
          action="{{ route('watches.favoris') }}" class="pb-4">
          @csrf
          <button
                type="submit"
                class="btn btn-primary"
                href="{{ route('watches.favoris', $watch) }}"
            >Ajouter aux favoris</button>
          <a href='{{ route('watches.favoris', $watch) }}' class="btn btn-primary">Ajouter aux favoris</a>
          <br>
        </form> --}}
        @if (Auth::user()->is_admin)
        <a href="{{ route('watches.edit', $watch) }}" class="btn btn-success">Modifier</a>
        
        <form method="POST" action="{{ route('watches.destroy', $watch) }}">
            @csrf
            @method('delete')
            <button
                type="submit"
                class="btn btn-danger"
                href="{{ route('watches.destroy', $watch) }}"
            >Supprimer</button>
        </form>
        @endif
        @endauth
    </blockquote>

    </div>

    </article>

@endsection
