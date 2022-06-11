<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\HasilKuesioner;
use App\Models\Periode;
use App\Models\Dosen;
use App\Models\FRS;

class KuesionerController extends Controller
{
    public function index()
    {
        $periode = Periode::orderBy('id', 'desc')->first();
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
        $matkul = FRS::where([
            ['NRP', auth()->user()->NRP],
            ['periode', $periods]
        ])
        ->join('mata_kuliah', 'frs.kodeMK', '=', 'mata_kuliah.kodeMataKuliah')
        ->join('dosen', [['frs.dosenNRP', '=', 'dosen.dosenNRP'], ['frs.kodeMK', '=', 'dosen.dosenKodeMK']])
        ->get();

        return view('contents.mahasiswa.kuesioner', ['smtper' => $smtper, 'periode' => $periode, 'matkul' => $matkul, 'kuesioner' => $kuesioner]);
    }

    public function ganti(Request $request)
    {
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
        $matkul = FRS::where([
            ['NRP', auth()->user()->NRP],
            ['periode', $periods]
        ])
        ->join('mata_kuliah', 'frs.kodeMK', '=', 'mata_kuliah.kodeMataKuliah')
        ->join('dosen', [['frs.dosenNRP', '=', 'dosen.dosenNRP'], ['frs.kodeMK', '=', 'dosen.dosenKodeMK']])
        ->get();

        return view('contents.mahasiswa.kuesioner', ['smtper' => $smtper, 'periode' => $periode, 'matkul' => $matkul, 'kuesioner' => $kuesioner]);
    }

    public function isi(Request $request)
    {
        $dosenNRP = $request->input('isiDosen');
        $dosen = Dosen::join('mata_kuliah', 'dosen.dosenKodeMK', '=', 'mata_kuliah.kodeMataKuliah')
            ->where([['dosen.dosenNRP', $dosenNRP], ['mata_kuliah.kodeMataKuliah', $request->isiMK]])
            ->first();
        $period = $request->periode;
        $tahun = Str::substr($period, 0, 4);
        $semester = Str::substr($period, 4, 1);
        
        switch ($semester) {
            case 'A':
                $periode = 'Ganjil ' . $tahun;
                break;
            case 'B':
                $periode = 'Genap ' . $tahun;
                break;
        }

        return view('contents.mahasiswa.isi-kuesioner', ['dosen' => $dosen, 'periode' => $periode]);
    }

    public function submit(Request $request)
    {
        HasilKuesioner::insert([
            'dosenNRP' => $request->dosenNRP,
            'periode' => $request->periode,
            'kodeMK' => $request->kodeMK,
            'jawaban1' => $request->pertanyaan1,
            'jawaban2' => $request->pertanyaan2,
            'jawaban3' => $request->pertanyaan3,
            'jawaban4' => $request->pertanyaan4,
            'jawaban5' => $request->pertanyaan5,
            'jawaban6' => $request->pertanyaan6,
            'jawaban7' => $request->pertanyaan7,
            'jawaban8' => $request->pertanyaan8,
            'jawaban9' => $request->pertanyaan9,
            'jawaban10' => $request->pertanyaan10,
            'jawaban11' => $request->pertanyaan11,
            'jawaban12' => $request->pertanyaan12,
            'komentar' => $request->komen
        ]);

        FRS::where([['NRP', auth()->user()->NRP], ['kodeMK', $request->kodeMK], ['periode', $request->periode]])
        ->update(['kuesioner' => '1']);

        return redirect('/kuesioner');
    }
}
