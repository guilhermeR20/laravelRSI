<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivroController;
use App\Http\Controllers\PratileiraController;
use App\Http\Controllers\SalaController;

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
    return view('welcome');  
});

//Livro 
Route::put('/livros/{id}',[LivroController::class, 'update'])->name('livros.update');

Route::get('/livros/edit/{id}', [LivroController::class, 'edit'])->name('livros.edit');

Route::get('/livros/create', [LivroController::class, 'create'])->name('livros.create');

Route::delete('/livros/{id}',[LivroController::class, 'destroy'])->name('livros.destroy');

Route::get('/livros/{id}',[LivroController::class, 'show'])->name('livros.show');

Route::post('/livros', [LivroController::class, 'store'])->name('livros.store');

Route::get('/livros', [LivroController::class, 'index'])->name('livros.index');

//Pratileira
Route::put('/pratileiras/{id}',[PratileiraController::class, 'update'])->name('pratileiras.update');

Route::get('/pratileiras/edit/{id}', [PratileiraController::class, 'edit'])->name('pratileiras.edit');

Route::get('/pratileiras/create', [PratileiraController::class, 'create'])->name('pratileiras.create');

Route::delete('/pratileiras/{id}',[PratileiraController::class, 'destroy'])->name('pratileiras.destroy');

Route::get('/pratileiras/{id}',[PratileiraController::class, 'show'])->name('pratileiras.show');

Route::post('/pratileiras', [PratileiraController::class, 'store'])->name('pratileiras.store');

Route::get('/pratileiras', [PratileiraController::class, 'index'])->name('pratileiras.index');

//Sala
Route::put('/salas/{id}',[SalaController::class, 'update'])->name('salas.update');

Route::get('/salas/edit/{id}', [SalaController::class, 'edit'])->name('salas.edit');

Route::get('/salas/create', [SalaController::class, 'create'])->name('salas.create');

Route::delete('/salas/{id}',[SalaController::class, 'destroy'])->name('salas.destroy');

Route::get('/salas/{id}',[SalaController::class, 'show'])->name('salas.show');

Route::post('/salas', [SalaController::class, 'store'])->name('salas.store');

Route::get('/salas', [SalaController::class, 'index'])->name('salas.index');