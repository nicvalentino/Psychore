<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\artikelController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PsyaskController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/artikel', [artikelController::class , 'index']);
Route::get('/artikel/{artikel:slug}', [artikelController::class , 'show']);
Route::get('/psyask', [PsyaskController::class , 'index']);

Route::get('/navbar', function () {
    return view('navbar');
});