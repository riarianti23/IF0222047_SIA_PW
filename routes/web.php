<?php

use App\Http\Controllers\FakultasController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProgramStudiController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SekolahController;

Route::get('/', function () {
    return view('awal');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/fakultas', FakultasController::class);
Route::resource('/program-studi', ProgramStudiController::class);

//API
Route::get('/sekolah', [SekolahController::class,'index']);
Route::get('/fetch-sekolah', [SekolahController::class,'fetchSekolah']);