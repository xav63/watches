<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//prefix permet de n'avoir qu'une seule route pour l'appel du controller(->controller) et pour l'appel de la vue(->name)
Route::prefix('/watch')->name('watch.')->controller(WatchController::class)->group(function(){
    Route::get('/', 'index')->name('index');
    
    Route::get('/{slug}/{id}', 'show')->where([
        'id' => '[0-9]+',
        'slug' => '[a-z0-9\+]'
    ])->name('show');
});
