<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class PegawaiController extends Controller
{
    public function index() {
        // share data untuk layout diluar slot komponen layout
        $data = [
            'title' => 'Halaman Pegawai',
            'name' => 'Firenze Higa Putra',
            'umur' => 18
        ];
        View::share($data);
        // share data ke view dalam slot layout
        return view('pegawai.index', ['username' => 'Higa Gallagher']);
    }
}
