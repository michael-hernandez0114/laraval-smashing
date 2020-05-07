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
    return view('home');
})->name('home');

Route::get('/articoli', function () {
    return view('articoli');
})->name('articoli');

Route::get('/articoli/{id}', function ($id) {
    return view('articolo', compact('id'));
})->name('articoli.show');
