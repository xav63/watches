<x-app-layout>

  <x-slot name="header">
    <h1 class="font-semibold text-xl text-gray-800 leading-tight text-center">
      Favoris
    </h1>
  </x-slot>

  <div class="card m-3" style="width: 18rem;">
    <img class="card-img-top mx-auto" src="{{ $watch->picture ? asset('storage/' . $watch->picture) : 'https://placehold.co/600x400' }}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Marque : {{ $watch->brand}}</h5>
      <p class="card-text">Modèle : {{$watch->name}}</p>
      <p> Complications : 
        @foreach($watch->complications as $complication)
        {{ $complication->complication }}
        <br>
        @endforeach
      </p>
      <a href="{{ route('watches.show', $watch) }}" class="btn btn-secondary">En savoir plus</a>
    </div>
    <br>
</div>
  
</x-app-layout>
<footer>
  <div class="d-flex justify-content-end text-right">
  <p >Copyright XS</p>
</div>
</footer>