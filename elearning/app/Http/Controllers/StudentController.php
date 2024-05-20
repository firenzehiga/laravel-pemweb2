<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;


class StudentController extends Controller
{
    public function index()
    {
    //mendapatkan data student dari database
        $students =  Student::all();

    // panggil view dan kirim data ke view
    return view('admin.contents.student.index', [
        'students' => $students
    ]);
    }

}
