<?php

use App\Http\Controllers\AutenticacionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientesInteresadosController;
use Illuminate\Support\Facades\Auth;

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

Route::view('/', 'home')->name('home');
Route::view('login', 'login')->name('login');
Route::view('productos/postrelimon', 'Ad/postrelimon')->name('PostreLimon');

Route::post('login', [AutenticacionController::class, "login"])->name('login.auth');
Route::post('logout', [AutenticacionController::class, "logout"])->name('logout.auth');

#Registro de formularios
Route::post('/', [ClientesInteresadosController::class, 'create'])->name('clientes.store');

#Panel de mods
Route::get('panel', [ClientesInteresadosController::class, 'index'])->name('panel')->middleware('auth');
Route::get('success/{id}', [ClientesInteresadosController::class, 'success']);
Route::get('delete/{id}', [ClientesInteresadosController::class, 'delete']);
