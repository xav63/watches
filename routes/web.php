<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WatchController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FavorisController;
use App\Models\Watch;

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

// Guest
Route::get('/', [WatchController::class, 'index'])->name('watches.index');


//prefix permet de n'avoir qu'une seule route pour l'appel du controller(->controller) et pour l'appel de la vue(->name)
Route::prefix('/watches')->name('watches.')->controller(WatchController::class)->group(function(){
    Route::get('/show/{watch}', 'show')->name('show');
    
});

// Auth
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/watches/{watch}/favoris', [WatchController::class, 'favoris'])->name('watches.favoris');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Admin
Route::resource('watches', WatchController::class)
->only(['store', 'create', 'edit', 'update', 'destroy'])    
->middleware(['auth', 'verified']);


require __DIR__.'/auth.php';
