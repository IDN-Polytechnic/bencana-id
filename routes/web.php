<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\PoskoController;
use Illuminate\Support\Facades\Auth;
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

// Route::resource('/', PoskoController::class);
Route::view('/', 'dashboard');
Route::view('/posko', 'posko/posko');
Route::view('/posko/create', 'posko/createposko');
Route::view('/logistik', 'logistik/logistik');
Route::view('/logistik/create', 'logistik/createlogistik');
Route::view('/login', '/login/login');

Route::get('/home', [HomeController::class, 'index'])->name('home');
