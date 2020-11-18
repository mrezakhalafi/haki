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

Route::prefix('form-biodata')->group(function () {
    Route::get('/', "BiodataController@index")->name('form-biodata');
    Route::post('/provinsi', "BiodataController@getProvinsiByCountryId")->name('provinsi-biodata');
    Route::post('/kabupaten', "BiodataController@getKabupatenByProvinsiId")->name('kabupaten-biodata');
});



Route::get('/login', function () {
    return view('login');
});
