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

Route::get('/pradinis', function () {
    return view('pradinis');
});

Route::get('/mainpage', function () {
    return view('mainpage');
});

Route::get('/placiau1', function () {
    return view('placiau1');
});

Route::get('/placiau2', function () {
    return view('placiau2');
});

Route::get('/placiau3', function () {
    return view('placiau3');
});

Route::get('/placiau4', function () {
    return view('placiau4');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
