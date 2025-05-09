<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TecnologiaController;
use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\ExperienciaLaboralController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\PortafolioController;
use App\Http\Controllers\HomeController;
use App\Models\Proyecto;
use App\Models\Tecnologia;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\JuegoDeLaVidaController;


/*
|---------------------------------------------------------------------------
| Web Routes
|---------------------------------------------------------------------------
|
| Here is where you can register web routes for your application.
| These routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::resource('/proyectos', ProyectoController::class);

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::resource('/tecnologia', TecnologiaController::class);

Route::resource('/experiencia', ExperienciaLaboralController::class);

// Ruta para cambiar el idioma
Route::get('lang/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'es'])) {
        session(['locale' => $locale]);
        App::setLocale($locale);
    }
    return redirect()->back();
})->name('lang.switch');

// Ruta principal utilizando PortafolioController
Route::get('/', [PortafolioController::class, 'index']);

Route::get('/contact', [ContactController::class, 'showForm'])->name('contact.form');
Route::post('/contact', [ContactController::class, 'sendEmail'])->name('contact.send');

Route::get('/juego-de-la-vida', [JuegoDeLaVidaController::class, 'index'])->name('juego.vida');



