<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DaftarKelasController extends Controller
{
    public function index()
    {
        $mk = DB::table('mata_kuliah')
        ->leftjoin('daftar_kelas', 'daftar_kelas.kodeKelas', '=', 'mata_kuliah.kodeKelas')
        ->get();

        $kapasitas = DB::table('nilai_mk')
        ->select('kodeMK', DB::raw('count(*) as total'))
        ->groupBy('kodeMK')
        ->get();

        $dosen = DB::table('dosen')->get();

        return view('contents.dosen.mataKuliah', [
            'mk' => $mk,
            'kapasitas' => $kapasitas,
            'dosen' => $dosen
        ]);
    }
}
