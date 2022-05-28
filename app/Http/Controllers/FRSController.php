<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FRSController extends Controller
{
    public function indexDosen()
    {
        $dosen = DB::table('dosen')->get();

        $mahasiswa = DB::table('wali')
        ->where('dosenNRP', auth()->user()->NRP)
        ->leftjoin('akun', 'akun.NRP', '=', 'wali.mahasiswaNRP')
        ->get();

        $frs = DB::table('frs')
        ->leftjoin('mata_kuliah', 'mata_kuliah.kodeMataKuliah', '=', 'frs.kodeMK')
        ->leftjoin('dosen', 'dosen.dosenKodeMK', '=', 'frs.kodeMK')
        ->orderBy('kodeMK', 'asc')
        ->get();

        $nilai = DB::table('nilai_mk')->get();

        return view('contents.dosen.frs', [
            'dosen' => $dosen,
            'mahasiswa' => $mahasiswa,
            'frs' => $frs,
            'nilai' => $nilai
        ]);
    }
}
