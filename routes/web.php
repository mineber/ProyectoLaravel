<?php

use App\Http\Controllers\CarritosController;
use App\Http\Controllers\JuegosController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\PlataformaController;
use App\Http\Controllers\Usuario;
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
Route::get('Nintendo', [JuegosController::class, 'Nintendo'])->name('Nintendo');
Route::get('cs', [LoginController::class, 'cs'])->name('cs');
Route::post('login',[LoginController::class, 'log'])->name('login.n');
Route::post('register',[LoginController::class, 'registro'])->name('register.n');
Route::get('registro', [RegistroController::class, 'index'])->name('registro');
Route::get('user', [Usuario::class, 'index'])->name('user');
Route::get('subirindex', [Usuario::class, 'subirindex'])->name('subirjuego');
Route::post('subir', [Usuario::class, 'subir'])->name('subir');
Route::get('plataforma/{nombre_plataforma}', [PlataformaController::class, 'index'])->name('plataforma');
Route::get('carrito', [CarritosController::class, 'index'])->name('carrito');