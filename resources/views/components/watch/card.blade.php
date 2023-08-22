{{-- Les accolades font automatiquement de l'échappement et évite ainsi d'insérer des scripts  --}}

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
      <a href="{{ route('watches.show', $watch) }}" class="btn btn-outline-success">En savoir plus</a>
    </div>
    <br>
</div>