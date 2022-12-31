<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AskController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PsyaskController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\RegisterController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/logout', [LogoutController::class, 'logout']);

Route::get('/artikel', [ArtikelController::class , 'index']);
Route::get('/artikel/create', [ArtikelController::class , 'create']);
Route::post('/artikel/create', [ArtikelController::class , 'store']);
Route::get('/artikel/{artikel:slug}', [ArtikelController::class , 'show']);

Route::get('/psyask', [PsyaskController::class , 'index']);
Route::delete('/psyask/{pertanyaan:id}/delete', [PsyaskController::class, 'destroy']);

Route::post('/psyask/comments', [CommentController::class , 'store']);
Route::delete('/psyask/comments/{comment:id}/delete', [CommentController::class , 'destroy']);
Route::put('/psyask/comments/{comment:id}/edit', [CommentController::class , 'update']);

Route::get('/ask', [AskController::class , 'index']);
Route::post('/ask', [AskController::class , 'store']);

