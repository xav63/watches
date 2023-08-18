<x-app-layout>

    <x-slot name="header">
      <h1 class="font-semibold text-xl text-gray-800 leading-tight text-center">
        Nouvelle montre
      </h1>
    </x-slot>
  
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
      <div class="max-w-5xl mx-auto p-4 sm:p-6 lg:p-8">
        <form method="POST" enctype="multipart/form-data"
          action="{{ route('watches.store') }}" class="pb-4">
          @csrf
          <label for="brand">Marque :</label><br>
          <input type="text" name="brand" id="brand"
            class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
          <label for="name">Nom du modèle :</label>
          <input type="text" name="name" id="name"
            class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <label for="date">Date :</label><br>
          <input type="text" name="date" id="date"
            class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <label for="price">Prix :</label><br>
            <input type="text" name="price" id="price"
              class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
              <br>
            <select class="form-select focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" aria-label="Default select example" name="complication" id="complication">
              <option>choisir une complication</option>
              <option value="Phase de lune">Phase de lune</option>
              <option value="Seconde rattrapante">Seconde rattrapante</option>
              <option value="Quantième">Quantième</option>
              <option value="Heure sautante">Heure sautante</option>
            </select><br>
              
          <label for="picture">Image :</label><br />
          <input type="file" name="picture" id="picture">
  
          <x-input-error :messages="$errors->all()" class="mt-2" /><br />
          <x-primary-button class="mt-4">{{ __('Publier') }}
          </x-primary-button>
        </form>
        <a href="{{ url()->previous() }}">Retour</a>
      </div>
    </div>
    
  </x-app-layout>
  <footer>
    <div class="d-flex justify-content-end text-right">
    <p >Copyright XS</p>
  </div>
  </footer>