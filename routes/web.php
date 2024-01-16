<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\FavouriteController;
use App\Http\Controllers\DetailController;
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
Route::get('/home', [HomeController::class, 'index']);
Route::get('/home/{id}', [HomeController::class, 'detail']);
Route::get('/genre/{id}', [GenreController::class, 'index']);
Route::get('/favourite', [FavouriteController::class, 'index']);
Route::get('/favourite/delete/{title}', [FavouriteController::class, 'deletedb']);
Route::get('/favourite/detail/{title}', [FavouriteController::class, 'detail']);
Route::get('/detail/{gameid}', [DetailController::class, 'insertdb']);

