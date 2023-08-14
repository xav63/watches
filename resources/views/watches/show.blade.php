@extends('base')

@section('title', 'La montre')
    
@endsection

@section('content')
    <h1 class="text-center">Watches</h1>
    <article>
        <img src="{{$watch->picture}}" alt="photo">
        <h2> {{ $watch->brand}} </h2>
        <h3>{{ $watch->name }}</h3>
        <p>{{ $watch->price }}</p>
        <p>{{ $watch->année }}</p>
        <div class="flex items-center flex-wrap ">
            <a href="{{route('watches.show', $post)}}" class="bg-gradient-to-r from-cyan-400 to-blue-400 hover:scale-105 drop-shadow-md  shadow-cla-blue px-4 py-1 rounded-lg">En savoir plus</a>
        </div>
    </article>
    
@endsection