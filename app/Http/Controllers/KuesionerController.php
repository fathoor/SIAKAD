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
        $ganti = false;
        $periode = Periode::orderBy('id', 'desc')->first();
        $kuesioner = Periode::all();
        $smtper = Periode::latest('id')->first();
        $smt = $smtper->id;
        $matkul = DB::table('daftar_kuesioner')
            ->join('mata_kuliah', 'daftar_kuesioner.kodeMK', '=', 'mata_kuliah.kodeMataKuliah')
            ->join('dosen', 'daftar_kuesioner.kodeMK', '=', 'dosen.dosenKodeMK')
            ->where([
                ['daftar_kuesioner.NRP', auth()->user()->NRP],
                ['mata_kuliah.semester', '=', $smt]
            ])
            ->get();
        return view('contents.kuesioner', ['smtper' => $smtper, 'periode' => $periode, 'matkul' => $matkul, 'kuesioner' => $kuesioner, $ganti]);
    }

    public function ganti(Request $request)
    {
        $ganti = true;
        $periode = Periode::orderBy('id', 'desc')->first();
        $kuesioner = Periode::all();
        $smtper = Periode::where('periode', $request->periode)->first();
        $smt = $smtper->id;
        $matkul = DB::table('daftar_kuesioner')
            ->join('mata_kuliah', 'daftar_kuesioner.kodeMK', '=', 'mata_kuliah.kodeMataKuliah')
            ->join('dosen', 'daftar_kuesioner.kodeMK', '=', 'dosen.dosenKodeMK')
            ->where([
                ['daftar_kuesioner.NRP', auth()->user()->NRP],
                ['mata_kuliah.semester','=', $smt]
            ])
            ->get();
        return view('contents.kuesioner', ['smtper' => $smtper, 'kuesioner' => $kuesioner, 'matkul' => $matkul, 'periode' => $periode, $ganti]);
    }
}
