<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/**
* Method HTTP:
*1. Get: digunakan untuk menampilkan data/halaman
*2. Post : digunakan untuk mengirim data 
*3. Put: digunakan untuk mengupdate data
*4. delete: Digunakan untuk menghapus data
*/

// Dashboard Route
use App\Http\Controllers\DashboardController;
Route::get('admin/dashboard', [DashboardController::class, 'index']);

// Student Route
use App\Http\Controllers\StudentController;
Route::get('admin/student', [StudentController::class, 'index']);

// Route menampilkan form Student
Route::get('admin/student/create', [StudentController::class, 'create']);
// Route untuk mengirim data form
Route::post('admin/student/create', [StudentController::class, 'store']);

//Route untk menmpilkan edit
Route::get('admin/student/edit/{id}', [StudentController::class, 'edit']);

// Route untuk menyimpan hasil edit / update
Route::put('admin/student/update/{id}', [StudentController::class, 'update']);

//Route untuk menghapus data
Route::delete('admin/student/delete/{id}', [StudentController::class, 'destroy']);

// Route::put()

// Route menampilkan form Edit
Route::get('admin/student/edit/{id}', [StudentController::class, 'edit'])->name('student.edit');

// Courses Route
use App\Http\Controllers\CoursesController;
Route::get('admin/courses', [CoursesController::class, 'index']);

// tambahkan routing baru
// Route::get('/salam',function(){
//     return "Assalmualaikum Higa, Selamat Belajar Laravel 11";
// });

// Route::get('/profil',function(){
//     return view('profil');
// });

// Route::get('/about',function(){
//     return view('about');
// });

// Route::get('/dashboard', [DashboardController::class, 'show']);

// Route::get('/dashboard/laporan', [DashboardController::class, 'laporan']);