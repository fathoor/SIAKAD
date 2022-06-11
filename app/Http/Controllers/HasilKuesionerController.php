<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Periode;
use App\Models\HasilKuesioner;
use App\Models\FRS;
use App\Models\DaftarKuesioner;

class HasilKuesionerController extends Controller
{
    public function index()
    {
        $hasil = FRS::where('dosenNRP', auth()->user()->NRP)->get();
        $periode = Periode::orderBy('id', 'DESC')->first();
        $period = $periode->periode;
        $tahun = Str::substr($period, 0, 4);
        $semester = Str::substr($period, 4, 1);

        switch ($semester) {
            case 'A':
                $periods = 'Ganjil ' . $tahun;
                break;
            case 'B':
                $periods = 'Genap ' . $tahun;
                break;
        }

        $kuesioner = Periode::all();
        $smtper = Periode::latest('id')->first();
        $matkul = DaftarKuesioner::where([
            ['dosenNRP', auth()->user()->NRP],
            ['periode', $periods]
        ])
        ->join('mata_kuliah', 'daftar_kuesioner.kodeMK', '=', 'mata_kuliah.kodeMataKuliah')
        ->get();

        if (HasilKuesioner::where('dosenNRP', auth()->user()->NRP)->exists()) {
            $tersedia = true;
        } else {
            $tersedia = false;
        }

        return view('contents.dosen.kuesioner', ['hasil' => $hasil, 'tersedia' => $tersedia, 'kuesioner' => $kuesioner, 'smtper' => $smtper, 'matkul' => $matkul, 'periode' => $periode]);
    }

    public function ganti(Request $request)
    {
        $hasil = FRS::where('dosenNRP', auth()->user()->NRP)->get();
        $periode = Periode::orderBy('id', 'desc')->first();
        $period = $request->periode;
        $tahun = Str::substr($period, 0, 4);
        $semester = Str::substr($period, 4, 1);

        switch ($semester) {
            case 'A':
                $periods = 'Ganjil ' . $tahun;
                break;
            case 'B':
                $periods = 'Genap ' . $tahun;
                break;
        }

        $kuesioner = Periode::all();
        $smtper = Periode::where('periode', $period)->first();
        $matkul = DaftarKuesioner::where([
            ['dosenNRP', auth()->user()->NRP],
            ['periode', $periods]
        ])
        ->join('mata_kuliah', 'daftar_kuesioner.kodeMK', '=', 'mata_kuliah.kodeMataKuliah')
        ->get();

        if (HasilKuesioner::where('dosenNRP', auth()->user()->NRP)->exists()) {
            $tersedia = true;
        } else {
            $tersedia = false;
        }

        return view('contents.dosen.kuesioner', ['hasil' => $hasil, 'tersedia' => $tersedia, 'kuesioner' => $kuesioner, 'smtper' => $smtper, 'matkul' => $matkul, 'periode' => $periode]);
    }

    public function hasil(Request $request)
    {
        $tahun = Str::substr($request->periode, 0, 4);
        $semester = Str::substr($request->periode, 4, 1);

        switch ($semester) {
            case 'A':
                $periode = 'Ganjil ' . $tahun;
                break;
            case 'B':
                $periode = 'Genap ' . $tahun;
                break;
        }

        $hasil = HasilKuesioner::where([
            ['dosenNRP', auth()->user()->NRP],
            ['periode', $periode],
            ['kodeMK', $request->kodeMK]
        ])->get();

        $j1 = HasilKuesioner::where([
            ['dosenNRP', auth()->user()->NRP],
            ['periode', $periode],
            ['kodeMK', $request->kodeMK]
        ])->avg('jawaban1');

        $j2 = HasilKuesioner::where([
            ['dosenNRP', auth()->user()->NRP],
            ['periode', $periode],
            ['kodeMK', $request->kodeMK]
        ])->avg('jawaban2');

        $j3 = HasilKuesioner::where([
            ['dosenNRP', auth()->user()->NRP],
            ['periode', $periode],
            ['kodeMK', $request->kodeMK]
        ])->avg('jawaban3');

        $j4 = HasilKuesioner::where([
            ['dosenNRP', auth()->user()->NRP],
            ['periode', $periode],
            ['kodeMK', $request->kodeMK]
        ])->avg('jawaban4');

        $j5 = HasilKuesioner::where([
            ['dosenNRP', auth()->user()->NRP],
            ['periode', $periode],
            ['kodeMK', $request->kodeMK]
        ])->avg('jawaban5');

        $j6 = HasilKuesioner::where([
            ['dosenNRP', auth()->user()->NRP],
            ['periode', $periode],
            ['kodeMK', $request->kodeMK]
        ])->avg('jawaban6');

        $j7 = HasilKuesioner::where([
            ['dosenNRP', auth()->user()->NRP],
            ['periode', $periode],
            ['kodeMK', $request->kodeMK]
        ])->avg('jawaban7');

        $j8 = HasilKuesioner::where([
            ['dosenNRP', auth()->user()->NRP],
            ['periode', $periode],
            ['kodeMK', $request->kodeMK]
        ])->avg('jawaban8');

        $j9 = HasilKuesioner::where([
            ['dosenNRP', auth()->user()->NRP],
            ['periode', $periode],
            ['kodeMK', $request->kodeMK]
        ])->avg('jawaban9');

        $j10 = HasilKuesioner::where([
            ['dosenNRP', auth()->user()->NRP],
            ['periode', $periode],
            ['kodeMK', $request->kodeMK]
        ])->avg('jawaban10');

        $j11 = HasilKuesioner::where([
            ['dosenNRP', auth()->user()->NRP],
            ['periode', $periode],
            ['kodeMK', $request->kodeMK]
        ])->avg('jawaban11');

        $j12 = HasilKuesioner::where([
            ['dosenNRP', auth()->user()->NRP],
            ['periode', $periode],
            ['kodeMK', $request->kodeMK]
        ])->avg('jawaban12');

        $matkul = HasilKuesioner::join('mata_kuliah', 'hasil_kuesioner.kodeMK', '=', 'mata_kuliah.kodeMataKuliah')
        ->where([
            ['hasil_kuesioner.dosenNRP', auth()->user()->NRP],
            ['hasil_kuesioner.periode', $periode],
            ['hasil_kuesioner.kodeMK', $request->kodeMK]
        ])
        ->first();

        return view('contents.dosen.hasil-kuesioner', ['hasil' => $hasil, 'matkul' => $matkul, 'j1' => $j1, 'j2' => $j2, 'j3' => $j3, 'j4' => $j4, 'j5' => $j5, 'j6' => $j6, 'j7' => $j7, 'j8' => $j8, 'j9' => $j9, 'j10' => $j10, 'j11' => $j11, 'j12' => $j12]);
    }
}
