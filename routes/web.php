<?php

use App\Http\Controllers\JuegosController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PlataformaController;
use App\Http\Controllers\RegistroController;
use Illuminate\Support\Facades\Route;

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

Route::get('', [JuegosController::class, 'index'])->name('inicio');
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::get('juegos', [JuegosController::class, 'index'])->name('juegos');
Route::get('registro', [RegistroController::class, 'index'])->name('registro');
Route::get('plataforma/{nombre_plataforma}', [PlataformaController::class, 'index'])->name('plataforma');
