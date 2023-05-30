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

Route::get("/results", [AlbumsController::class, 'index'])->name("albums.results");

Route::get("/list", [AlbumsController::class, 'list'])->name("album.list");

Route::delete('/delete/{id}', [FaixasController::class, 'deleteFaixa'])->name('delete.faixa');

Route::delete('/delete/album/{id}', [AlbumsController::class, 'deleteAlbum'])->name('delete.album');

Route::get("/create-tracks", [FaixasController::class, 'showAlbuns'])->name("get.albuns");

Route::post("/create", [AlbumsController::class, 'store'])->name("album.store");

Route::post("/tracks", [FaixasController::class, 'store'])->name("faixas.store");

Route::get("/list/action", [AlbumsController::class, 'listActions'])->name("album.action");

Route::get('/pesquisa', [AlbumsController::class, 'searchAlbumFaixa'])->name('pesquisa');

Route::get("/home", [AlbumsController::class, 'showHome'])->name("home");
