<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\AdminController;
Route::get('/admin', [AdminController::class, 'index'])->name('admin');

use App\Http\Controllers\PegawaiController;
Route::get('/pegawai', [PegawaiController::class, 'index'])->name('pegawai');