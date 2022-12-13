<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\artikelController;
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

Route::get('/home', function () {
    return view('home');
});

Route::get('/register', function () {
    return view('coba');
});

Route::get('/artikel', [artikelController::class , 'index']);

Route::get('/artikel/{artikel:slug}', [artikelController::class , 'show']);

Route::get('/navbar', function () {
    return view('navbar');
});