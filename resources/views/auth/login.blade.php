{{-- @extends('base')
@section('title', 'Connexion')
    


@section('content') --}}
<nav>
    <ul class="flex sm:justify-end space-x-4 text-sky-600">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('watches.index')}}">Accueil</a>
        </li>
        {{-- Connection --}}
        @auth
        <li>
          <a class="nav-link" href="{{ route('dashboard') }}">
          {{ Auth::user()->name }}
          </a>
        </li>
        <li>
          <!-- Authentication -->
          <form method="POST" action="{{ route('logout') }}">
            @csrf

            <a class="nav-link" href="route('logout')"
                    onclick="event.preventDefault();
                                this.closest('form').submit();">
                {{ __('se déconnecter') }}
            </a>
        </form>
        </li>
        </li>
        @else
       
        <li class="nav-item">
          <a class="nav-link" href="{{route('register')}}">{{ __('S\'inscrire') }}</a>
        </li>
        @endauth
      </ul>
      
      <hr>
    </nav>
<div class="text-center">
    <h1 class="font-weight-bolder text-4xl">Se connecter</h1>
</div>
<x-guest-layout>
    
    
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf
        
        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Mot de passe')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Se souvenir de moi') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Mot de passe perdu ?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Se connecter') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
<br>
{{-- @endsection --}}
<footer>
    <div class="d-flex justify-content-end text-right">
    <p >Copyright XS</p>
  </div>
  </footer>