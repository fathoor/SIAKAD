<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Periode;
use App\Models\Dosen;

class KuesionerController extends Controller
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
                ['daftar_kuesioner.NRP', auth()->user()->NRP],
                ['mata_kuliah.semester', '=', $smt]
            ])
            ->get();
        return view('contents.mahasiswa.kuesioner', ['smtper' => $smtper, 'periode' => $periode, 'matkul' => $matkul, 'kuesioner' => $kuesioner]);
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
                ['daftar_kuesioner.NRP', auth()->user()->NRP],
                ['mata_kuliah.semester', '=', $smt]
            ])
            ->get();
        return view('contents.mahasiswa.kuesioner', ['smtper' => $smtper, 'kuesioner' => $kuesioner, 'matkul' => $matkul, 'periode' => $periode]);
    }

    public function isi(Request $request)
    {
        $dosenNRP = $request->input('isiDosen');
        $dosen = DB::table('dosen')
            ->join('mata_kuliah', 'dosen.dosenKodeMK', '=', 'mata_kuliah.kodeMataKuliah')
            ->where('dosen.dosenNRP', $dosenNRP)
            ->first();
        $periode = $request->periode;
        return view('contents.mahasiswa.isi-kuesioner', ['dosen' => $dosen, 'periode' => $periode]);
    }

    public function submit(Request $request)
    {
        DB::table('hasil_kuesioner')
            ->insert([
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

        DB::table('daftar_kuesioner')
            ->where([['NRP', auth()->user()->NRP], ['kodeMK', $request->kodeMK]])
            ->update(['status' => '1']);

        return redirect('/kuesioner');
    }
}
