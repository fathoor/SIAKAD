<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Periode;
use App\Models\HasilKuesioner;
use Illuminate\Support\Facades\DB;

class HasilKuesionerController extends Controller
{
    public function index()
    {
        $periode = Periode::orderBy('id', 'desc')->first();
        $kuesioner = Periode::all();
        $smtper = Periode::latest('id')->first();
        $smt = $smtper->id;
        $matkul = DB::table('daftar_kuesioner')
            ->join('mata_kuliah', 'daftar_kuesioner.kodeMK', '=', 'mata_kuliah.kodeMataKuliah')
            ->join('dosen', 'daftar_kuesioner.kodeMK', '=', 'dosen.dosenKodeMK')
            ->where([
                ['dosen.dosenNRP', auth()->user()->NRP],
                ['mata_kuliah.semester', '=', $smt]
            ])
            ->get();
        if (HasilKuesioner::where('dosenNRP', auth()->user()->NRP)->exists()) {
            $tersedia = true;
        } else {
            $tersedia = false;
        }
        return view('contents.dosen.kuesioner', ['tersedia' => $tersedia, 'kuesioner' => $kuesioner, 'smtper' => $smtper, 'matkul' => $matkul, 'periode' => $periode]);
    }

    public function ganti(Request $request)
    {
        $periode = Periode::orderBy('id', 'desc')->first();
        $kuesioner = Periode::all();
        $smtper = Periode::where('periode', $request->periode)->first();
        $smt = $smtper->id;
        $matkul = DB::table('daftar_kuesioner')
            ->join('mata_kuliah', 'daftar_kuesioner.kodeMK', '=', 'mata_kuliah.kodeMataKuliah')
            ->join('dosen', 'daftar_kuesioner.kodeMK', '=', 'dosen.dosenKodeMK')
            ->where([
                ['dosen.dosenNRP', auth()->user()->NRP],
                ['mata_kuliah.semester', '=', $smt]
            ])
            ->get();
        if (HasilKuesioner::where('dosenNRP', auth()->user()->NRP)->exists()) {
            $tersedia = true;
        } else {
            $tersedia = false;
        }
        return view('contents.dosen.kuesioner', ['tersedia' => $tersedia, 'kuesioner' => $kuesioner, 'smtper' => $smtper, 'matkul' => $matkul, 'periode' => $periode]);
    }

    public function hasil(Request $request)
    {
        $hasil = HasilKuesioner::where([
            ['dosenNRP', auth()->user()->NRP],
            ['periode', $request->periode],
            ['kodeMK', $request->kodeMK]
        ])->get();

        $j1 = HasilKuesioner::where([
            ['dosenNRP', auth()->user()->NRP],
            ['periode', $request->periode],
            ['kodeMK', $request->kodeMK]
        ])->avg('jawaban1');

        $j2 = HasilKuesioner::where([
            ['dosenNRP', auth()->user()->NRP],
            ['periode', $request->periode],
            ['kodeMK', $request->kodeMK]
        ])->avg('jawaban2');

        $j3 = HasilKuesioner::where([
            ['dosenNRP', auth()->user()->NRP],
            ['periode', $request->periode],
            ['kodeMK', $request->kodeMK]
        ])->avg('jawaban3');

        $j4 = HasilKuesioner::where([
            ['dosenNRP', auth()->user()->NRP],
            ['periode', $request->periode],
            ['kodeMK', $request->kodeMK]
        ])->avg('jawaban4');

        $j5 = HasilKuesioner::where([
            ['dosenNRP', auth()->user()->NRP],
            ['periode', $request->periode],
            ['kodeMK', $request->kodeMK]
        ])->avg('jawaban5');

        $j6 = HasilKuesioner::where([
            ['dosenNRP', auth()->user()->NRP],
            ['periode', $request->periode],
            ['kodeMK', $request->kodeMK]
        ])->avg('jawaban6');

        $j7 = HasilKuesioner::where([
            ['dosenNRP', auth()->user()->NRP],
            ['periode', $request->periode],
            ['kodeMK', $request->kodeMK]
        ])->avg('jawaban7');

        $j8 = HasilKuesioner::where([
            ['dosenNRP', auth()->user()->NRP],
            ['periode', $request->periode],
            ['kodeMK', $request->kodeMK]
        ])->avg('jawaban8');

        $j9 = HasilKuesioner::where([
            ['dosenNRP', auth()->user()->NRP],
            ['periode', $request->periode],
            ['kodeMK', $request->kodeMK]
        ])->avg('jawaban9');

        $j10 = HasilKuesioner::where([
            ['dosenNRP', auth()->user()->NRP],
            ['periode', $request->periode],
            ['kodeMK', $request->kodeMK]
        ])->avg('jawaban10');

        $j11 = HasilKuesioner::where([
            ['dosenNRP', auth()->user()->NRP],
            ['periode', $request->periode],
            ['kodeMK', $request->kodeMK]
        ])->avg('jawaban11');

        $j12 = HasilKuesioner::where([
            ['dosenNRP', auth()->user()->NRP],
            ['periode', $request->periode],
            ['kodeMK', $request->kodeMK]
        ])->avg('jawaban12');

        $matkul = HasilKuesioner::join('mata_kuliah', 'hasil_kuesioner.kodeMK', '=', 'mata_kuliah.kodeMataKuliah')
            ->where([
                ['hasil_kuesioner.dosenNRP', auth()->user()->NRP],
                ['hasil_kuesioner.periode', $request->periode],
                ['hasil_kuesioner.kodeMK', $request->kodeMK]
            ])
            ->first();

        return view('contents.dosen.hasil-kuesioner', ['hasil' => $hasil, 'matkul' => $matkul, 'j1' => $j1, 'j2' => $j2, 'j3' => $j3, 'j4' => $j4, 'j5' => $j5, 'j6' => $j6, 'j7' => $j7, 'j8' => $j8, 'j9' => $j9, 'j10' => $j10, 'j11' => $j11, 'j12' => $j12]);
    }
}