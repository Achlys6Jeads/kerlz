<?php

use App\Http\Controllers\CategorieController;
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

Route::get('/', [CategorieController::class,'index']);
Route::get('/categorie/{key}', [CategorieController::class,'categorie']);

Route::get('/payement', [CategorieController::class,'paid']);
Route::get('/verifier/{key}', [CategorieController::class,'validermail']);
