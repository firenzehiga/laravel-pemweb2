<?php
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Dashboard Route
Route::get('admin/dashboard', [DashboardController::class, 'index'])->name('dashboard');
// Student Route
Route::get('admin/student', [StudentController::class, 'index'])->middleware('auth','admin');
// Route menampilkan form Student
Route::get('admin/student/create', [StudentController::class, 'create'])->middleware('auth','admin');
// Route untuk mengirim data form
Route::post('admin/student/create', [StudentController::class, 'store']);
//Route untk menmpilkan edit
Route::get('admin/student/edit/{id}', [StudentController::class, 'edit']);
// Route untuk menyimpan hasil edit / update
// Route::put()
Route::put('admin/student/update/{id}', [StudentController::class, 'update']);
//Route untuk menghapus data
Route::delete('admin/student/delete/{id}', [StudentController::class, 'destroy']);

// Courses Route
Route::get('admin/courses', [CoursesController::class, 'index']);
// Route menampilkan form Courses
Route::get('admin/courses/create', [CoursesController::class, 'create'])->middleware('auth','admin');
// Route untuk mengirim data form
Route::post('admin/courses/create', [CoursesController::class, 'store']);
//Route untk menmpilkan edit
Route::get('admin/courses/edit/{id}', [CoursesController::class, 'edit'])->middleware('auth','admin');;
// Route untuk menyimpan hasil edit / update
Route::put('admin/courses/update/{id}', [CoursesController::class, 'update']);
//Route untuk menghapus data
Route::delete('admin/courses/delete/{id}', [CoursesController::class, 'destroy']);
// Route menampilkan form Edit
});

require __DIR__.'/auth.php';

/**
* Method HTTP:
*1. Get: digunakan untuk menampilkan data/halaman
*2. Post : digunakan untuk mengirim data 
*3. Put: digunakan untuk mengupdate data
*4. delete: Digunakan untuk menghapus data
*/