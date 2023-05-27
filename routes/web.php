<?php

use App\Http\Controllers\AlbumsController;
use App\Http\Controllers\FaixasController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
});

Route::get('/create', function () {
    return view('create');
});

Route::get("/index", [AlbumsController::class, 'index'])->name("albums.index");

Route::get("/list", [AlbumsController::class, 'list'])->name("album.list");

//Route::get("/create-tracks", [FaixasController::class, 'createTracks'])->name("album.tracks");

Route::get("/create-tracks", [FaixasController::class, 'showAlbuns'])->name("get.albuns");

Route::post("/create", [AlbumsController::class, 'store'])->name("album.store");

Route::post("/tracks", [FaixasController::class, 'store'])->name("faixas.store");
