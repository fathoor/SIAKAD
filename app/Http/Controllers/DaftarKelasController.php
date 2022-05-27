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

    public function kelas($kodeMK)
    {
        $peserta = DB::table('nilai_mk')
        ->leftjoin('akun', 'akun.NRP', '=', 'nilai_mk.NRP')
        ->where('kodeMK', $kodeMK)
        ->orderBy('nilai_mk.NRP', 'asc')
        ->get();

        $mk = DB::table('mata_kuliah')
        ->leftjoin('daftar_kelas', 'daftar_kelas.kodeKelas', '=', 'mata_kuliah.kodeKelas')
        ->get();

        $dosen = DB::table('dosen')->get();

        return view('contents.dosen.kelas', [
            'peserta' => $peserta,
            'mk' => $mk,
            'kode' => $kodeMK,
            'dosen' => $dosen
        ]);
    }
}
