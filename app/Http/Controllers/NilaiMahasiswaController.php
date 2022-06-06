<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NilaiMahasiswaController extends Controller
{
    public function index()
    {
        return view('contents.dosen.nilaiMahasiswa');
    }
}
