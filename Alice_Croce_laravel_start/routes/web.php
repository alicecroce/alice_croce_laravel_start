<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

//stringa
Route::get('/stringa', function () {
    return 'Ciao sono una stringa';
});

//intero
Route::get('/123', function () {
    return 123;
});

//array

Route::get('/array', function () {
    $arr = [1, 2, 3];
    return $arr;
});


Route::get('/chi-siamo', function () {
    return view('chisiamo');
});

Route::get('/contatti', function () {
    return view('contatti');
});

Route::get('/storia', function () {
    return view('storia');
});
