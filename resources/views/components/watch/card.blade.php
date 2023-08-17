<div class="card m-3" style="width: 18rem;">
    <img class="card-img-top mx-auto" src="{{  $watch->picture }}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Marque : {{ $watch->brand}}</h5>
      <p class="card-text">Modèle : {{$watch->name}}</p>
      <a href="{{ route('watches.show', $watch) }}" class="btn btn-secondary">En savoir plus</a>
    </div>
    <br>
</div>