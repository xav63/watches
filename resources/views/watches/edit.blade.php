<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <form method="POST" enctype="multipart/form-data" action="{{ route('watches.update', $watch) }}">
            @csrf
            @method('patch')
            <label for="brand">Marque :</label><br>
            <input type="text" name="brand" id="brand"
            class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" value="{{$watch->brand}}">
            <label for="name">Modèle :</label><br>
            <input type="text" name="name" id="name"
            class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" value="{{$watch->name}}">
            <label for="date">Date :</label><br>
            <input type="text" name="date" id="date"
            class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"value="{{$watch->date}}">
            <label for="price">Prix :</label><br>
            <input type="text" name="price" id="price"
              class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"value="{{$watch->price}}">
            <label for="picture">Image :</label><br>
            <input type="file" name="picture" id="picture"><br>
            <x-input-error :messages="$errors->get('message')" class="mt-2" />
            <div class="mt-4 space-x-2">
                <x-primary-button>{{ __('Sauvegarder') }}</x-primary-button>
                <a href="{{ route('watches.index') }}">{{ __('Annuler') }}</a>
            </div>
        </form>
    </div>
</x-app-layout>