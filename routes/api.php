<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\ProyectoController;
use App\Http\Controllers\Api\PortafolioController;
use App\Http\Controllers\Api\TecnologiaController;
use App\Http\Controllers\Api\ExperienciaLaboralController;
use App\Http\Controllers\Api\ContactController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// Endpoints públicos
Route::get('/proyectos', [ProyectoController::class, 'index']);
Route::get('/portafolios', [PortafolioController::class, 'index']);
Route::get('/tecnologias', [TecnologiaController::class, 'index']);
Route::get('/experiencias', [ExperienciaLaboralController::class, 'index']);
Route::get('/contactos', [ContactController::class, 'index']);