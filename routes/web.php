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

    return view('homepage');
})->name('homepage');

// HomePage


Route::get('guests.characters', function () {

    return view('guests.characters');
})->name('guests.characters');

// -- End Characters --

Route::get('guests.comics_index', function () {
    $comics = config('db.comics');
    //dd('comics');
    
    return view('guests.comics_index', ['comics' => $comics]);
})->name('guests.comics_index');
Route::get('guests.show.comics/{id}', function ($id) {

    
    abort_unless($id >= 0 && $id < count(config('db.comics')), 404);

    $comic = config('db.comics')[$id];
    //dd($comic);
    

    return view('guests.show.comics',compact('comic') );
})->name('guests.show.comics');

// -- End Comics --

Route::get('guests.movies', function () {

    return view('guests.movies');
})->name('guests.movies');

// -- End Movies --

Route::get('guests.tv', function () {

    return view('guests.tv');
})->name('guests.tv');

// -- End Tv --

Route::get('guests.games', function () {

    return view('guests.games');
})->name('guests.games');

// -- End Games --

Route::get('guests.collectibles', function () {

    return view('guests.collectibles');
})->name('guests.collectibles');

// -- End Collectibles --

Route::get('guests.videos', function () {

    return view('guests.videos');
})->name('guests.videos');

// -- End Videos --

Route::get('guests.fans', function () {

    return view('guests.fans');
})->name('guests.fans');

// -- End Fans --

Route::get('guests.news', function () {

    return view('guests.news');
})->name('guests.news');

// -- End News --

