<?php

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

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/posko', function () {
    return view('/posko/posko');
});

Route::get('/posko/create', function () {
    return view('/posko/createposko');
});

Route::get('/logistik', function () {
    return view('/logistik/logistik');
});

Route::get('/logistik/create', function () {
    return view('/logistik/createlogistik');
});

Route::get('/login', function () {
    return view('/login/login');
});
