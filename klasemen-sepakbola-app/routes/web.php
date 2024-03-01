<?php

use App\Http\Controllers\KlubController;
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

Route::get('/', [KlubController::class, 'index'])->name('home');

Route::get('/form-klub', [KlubController::class, 'create_klub'])->name('klub');
Route::post('/form-klub', [KlubController::class, 'store_klub'])->name('store_klub');

Route::get('/form-skor', [KlubController::class, 'create_score'])->name('score');
Route::post('/form-skor', [KlubController::class, 'store_score'])->name('store_score');