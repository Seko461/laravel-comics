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

    $comics = config('db.comics');
    //dd('comics');
    return view('homepage', compact('comics'));
})->name('homepage');

Route::get('/comics', function () {

    return view('/comics');
})->name('comics');

