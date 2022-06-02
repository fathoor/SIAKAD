<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\MataKuliah;
use App\Models\DaftarKelas;
use App\Models\Dosen;
use App\Models\FRS;
use App\Models\FRSStatus;

class DaftarKelasController extends Controller
{
    public function index()
    {
        $mk = MataKuliah::orderByRaw('semester ASC, kodeMataKuliah ASC')->paginate(6);

        $peserta = FRSStatus::where([['frs_status.periode', 'Genap 2021'], ['status', true]])
        ->join('frs', 'frs.NRP', '=', 'frs_status.NRP')
        ->select('kodeMK', DB::raw('count(*) as total'))
        ->groupBy('kodeMK')
        ->get();

        $dosen = Dosen::get();

        return view('contents.dosen.mataKuliah', [
            'mk' => $mk,
            'peserta' => $peserta,
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
