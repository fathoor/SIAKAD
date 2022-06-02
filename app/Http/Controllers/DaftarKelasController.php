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

    public function kelas($kodeMK, $kelas)
    {
        $peserta = FRS::join('akun', 'akun.NRP', '=', 'frs.NRP')
        ->join('frs_status', 'frs_status.NRP', '=', 'frs.NRP')
        ->where([['kodeMK', $kodeMK], ['kelas', $kelas], ['frs_status.periode', 'Genap 2021'], ['status', true]])
        ->orderBy('frs.NRP', 'asc')
        ->get();

        $mk = MataKuliah::join('daftar_kelas', 'daftar_kelas.kodeMK', '=', 'mata_kuliah.kodeMataKuliah')
        ->join('dosen', 'dosen.dosenkodeMK', '=', 'mata_kuliah.kodeMataKuliah')
        ->where([['kodeMataKuliah', $kodeMK], ['kelas', $kelas]])
        ->first();

        return view('contents.dosen.kelas', [
            'peserta' => $peserta,
            'mk' => $mk,
            'kode' => $kodeMK,
            'kelas' => $kelas
        ]);
    }
}
