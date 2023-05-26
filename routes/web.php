<?php

use App\Http\Controllers\AlbumsController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
});

Route::get('/create', function () {
    return view('create');
});

// Route::post('/create', 'AlbumController@store');

// Route::post('/create', 'AlbumsController@store')->name('create');

Route::post("/create", [AlbumsController::class, 'store'])->name("album.store");

Route::get("/index", [AlbumsController::class, 'index'])->name("albums.index");
