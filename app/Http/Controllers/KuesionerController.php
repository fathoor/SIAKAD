<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Periode;
use Illuminate\Support\Str;

class KuesionerController extends Controller
{
    public function index()
    {
        $periode = Periode::orderBy('id', 'desc')->first();
        $kuesioner = Periode::all();
        $matkul = DB::table('daftar_kuesioner')
            ->join('mata_kuliah', 'daftar_kuesioner.kodeMK', '=', 'mata_kuliah.kodeMataKuliah')
            ->join('dosen', 'daftar_kuesioner.kodeMK', '=', 'dosen.dosenKodeMK')
            ->where('daftar_kuesioner.NRP', auth()->user()->NRP)
            ->get();
        return view('contents.kuesioner', ['periode' => $periode, 'matkul' => $matkul, 'kuesioner' => $kuesioner]);
    }

    public function ganti(Request $request)
    {
        $periode = Periode::orderBy('id', 'desc')->first();
        $kuesioner = Periode::all();
        $smt = Periode::where('periode', $request->period)->first()->id;
        $matkul = DB::table('daftar_kuesioner')
            ->join('mata_kuliah', 'daftar_kuesioner.kodeMK', '=', 'mata_kuliah.kodeMataKuliah')
            ->join('dosen', 'daftar_kuesioner.kodeMK', '=', 'dosen.dosenKodeMK')
            ->where([
                ['daftar_kuesioner.NRP', auth()->user()->NRP].
                ['daftar_kuesioner.semester', $smt]
            ])
            ->get();
        return view('contents.kuesioner', ['kuesioner' => $kuesioner, 'matkul' => $matkul, 'periode' => $periode]);
    }
}
