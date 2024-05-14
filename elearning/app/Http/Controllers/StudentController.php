<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class StudentController extends Controller
{
    public function index()
    {
        return view('admin.contents.student.index');
    }

}
