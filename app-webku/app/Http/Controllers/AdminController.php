<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class AdminController extends Controller
{
    public function index() {
        // share data untuk layout diluar slot komponen layout
        $data_layout = [
            'title' => 'Halaman Admin',
        ];
        View::share($data_layout);
        // share data ke view dalam slot layout
        return view('admin.index', ['username' => 'Firenze Higa Putra']);
    }
}
