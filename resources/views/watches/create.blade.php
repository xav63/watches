@extends('base')
@section('title', 'Connexion')
    


@section('content')


<x-app-layout>

    <x-slot name="header">
      <h1 class="font-semibold text-xl text-gray-800 leading-tight">
        Nouvelle montre
      </h1>
    </x-slot>
  
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
      <div class="max-w-5xl mx-auto p-4 sm:p-6 lg:p-8">
        <form method="GET" enctype="multipart/form-data"
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
              <select class="form-select" aria-label="Default select example" type="text" name="complications" id="complications">
                <option selected>choisir une complication</option>
                <option value="1">Phase de lune</option>
                <option value="2">Seconde rattrapante</option>
                <option value="3">Quantième</option>
                <option value="4">Heure sautante</option>
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
  @endsection