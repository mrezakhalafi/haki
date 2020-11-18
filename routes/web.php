<?php

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
    return view('landing-page');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/reademail', function () {
    return view('reademail');
});

Route::get('/form-biodata', function () {
    return view('form-biodata');
});

Route::get('/login', function () {
    return view('login');
});
