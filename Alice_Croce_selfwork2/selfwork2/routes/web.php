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
    return view('home');
});

Route::get('/aboutus', function () {
    return view('about-us');
});

Route::get('/destinations', function () {
    $destinations = ['Roma', 'Milano', 'Bari', 'Amsterdam', 'Napoli', 'Praga'];
    return view('destinations', ['destinazioni' => $destinations]);
});

Route::get('/contacts', function () {
    return view('form-contatti');
});
