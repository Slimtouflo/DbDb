<?php

use App\Http\Controllers\CharactersController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RacesController;
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

Route::get('/', [HomeController::class, 'index']);

Route::get('/races', [RacesController::class, 'index']);
Route::get('/races/creer', [RacesController::class, 'create']);
Route::post('/races/creer', [RacesController::class, 'store']);
Route::get('/races/{id}/supprimer', [RacesController::class, 'destroy']);

Route::get('/personnages', [CharactersController::class, 'index']);
Route::get('/personnages/creer', [CharactersController::class, 'create']);
Route::post('/personnages/creer', [CharactersController::class, 'store']);
Route::get('/personnages/{id}', [CharactersController::class, 'show']);
Route::get('/personnages/{id}/modifier', [CharactersController::class, 'edit']);
Route::post('/personnages/{id}/modifier', [CharactersController::class, 'update']);
Route::get('/personnages/{id}/supprimer', [CharactersController::class, 'destroy']);
