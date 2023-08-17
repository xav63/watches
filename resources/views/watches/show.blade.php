@extends('base')

@section('title', 'La montre')
    


@section('content')
    
    <article class="d-flex flex-row">
        <img class="border-primary mb-3 w-50 .img-thumbnail rounded mr-auto p-2" src="{{ $watch->picture }}" alt="photo">
    <div class="align-middle">
        <h2> Marque : {{ $watch->brand }} </h2>
        <h3> Nom du modèle : {{ $watch->name }} </h3>
        <p> prix : {{ $watch->price }} €</p>
        <p> Année : {{ $watch->date }} </p>
        <p> Complications : 
            {{-- @foreach($watch->complications as $complication)
            {{ $complication->complication }}
            <br>
            @endforeach --}}
        </p>
        <a href="">Ajouter au favoris</a>
    </div>
    {{-- @if ($post->user->is(auth()->user()))
        <x-dropdown>
            <x-slot name="trigger">
                <button>
                    <svg xmlns="http://www.w3.orgsvg" class="h-4 w-4 text-grayviewBox="0 0 2fill="currentColor">
                        <path d="M6 10a2 2 0 11-4 0 014 0zM12 10a2 2 0 11-4 0 014 0zM16 12a2 2 0 100-4 2 2 4z" />
                    </svg>
                </button>
            </x-slot>
            <x-slot name="content">
                                        
                <x-dropdown-link :href="route('watches.edit', $watch)">
                    {{ __('Modifier') }}
                </x-dropdown-link>
                <form method="POST" action="{{('watches.destroy', $watch) }}">
                    @csrf
                    @method('delete')
                    <x-dropdown-link :href="route('watches.destroy', $watch)" onclick="preventDefault(); this.closest('fsubmit();">
                        {{ __('Supprimer') }}
                    </x-dropdown-link>
        @endif --}}
    </article>
    
@endsection