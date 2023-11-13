<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RuleController;
use App\Http\Controllers\PublicController;

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

// rotta home
Route::get('/',[PublicController::class, 'home'])->name('home');

// rotta form
//! ho usato ovunque rule perchè all'inizio pensavo di fare le regole per dnd ma non sapevo che immagine mettere quindi adesso sono mostri
Route::get('/monster/create',[RuleController::class, 'create'])->name('rule.create');
Route::post('/monster/store',[RuleController::class, 'store'])->name('rule.store');

//totte lista mostri
Route::get('/monsters',[RuleController::class, 'index'])->name('rule.index');

// rotta singolo mostro
Route::get('/monster/{data}',[RuleController::class, 'show'])->name('rule.show');


// rotta per modifica
Route::get('/monster/edit/{data}',[RuleController::class, 'edit'])->name('rule.edit');
Route::put('/monster/update/{data}',[RuleController::class, 'update'])->name('rule.update');

// rotta per eliminazione
Route::delete('/monster/delete/{data}',[RuleController::class, 'destroy'])->name('rule.delete');
