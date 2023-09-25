<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/bienvenue', function(){
    return Inertia::render('Auth/bienvenue');
});
Route::get('/MonProfil', function(){
    return Inertia::render('Auth/MonProfil');
});
Route::get('/Commandes', function(){
    return Inertia::render('Auth/Commandes');
});
Route::get('/Historique', function(){
    return Inertia::render('Auth/Historique');
});
Route::get('/Gestion', function(){
    return Inertia::render('Auth/Gestion');
});
Route::get('/Support', function(){
    return Inertia::render('Auth/Support');
});

Route::get('/abonnements-actifs', [AbonnementController::class, 'abonnementsActifs'])->name('abonnements.actifs');

require __DIR__.'/auth.php';
