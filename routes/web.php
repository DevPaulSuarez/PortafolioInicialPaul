<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TecnologiaController;
use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\ExperienciaLaboralController;

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

Route::get('/',   [App\Http\Controllers\PortafolioController::class, 'index']);

Auth::routes();

Route::resource('/proyectos', ProyectoController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/tecnologia', TecnologiaController::class);

Route::resource('/experiencia', ExperienciaLaboralController::class);


