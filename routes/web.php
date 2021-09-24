<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavController;
use App\Http\Controllers\ActionController;

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

Route::get('/', [NavController::class, 'welcome']);

Route::get('/acteurs', [NavController::class, 'list']);

Route::get('/descript/{id}', [NavController::class, 'descript']);

Route::get('/rajouter', [NavController::class, 'rajout']);

Route::post('/rajouter', [ActionController::class, 'rajout']);

Route::post('/delete', [ActionController::class, 'deletePersonnage']);

Route::get('/actualise/{id}', [NavController::class, 'actualisePersonnage']);

Route::post('/actualise/{id}', [ActionController::class, 'actualisePersonnage']);
