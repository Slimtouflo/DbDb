<?php

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
