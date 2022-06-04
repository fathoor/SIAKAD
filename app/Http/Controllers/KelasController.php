<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\DaftarKelas;
use App\Models\Dosen;

class KelasController extends Controller
{
    public function index() {
        $kelas = DaftarKelas::join('mata_kuliah', 'mata_kuliah.kodeMataKuliah',  '=', 'daftar_kelas.kodeMK')
        ->join('dosen', function($join){
            $join->on('dosen.dosenKodeMK', '=', 'daftar_kelas.kodeMK');
            $join->on('dosen.dosenNRP', '=', 'daftar_kelas.dosenNRP');})
        ->orderByRaw('semester ASC, kodeMK ASC, kelas ASC')
        ->paginate(10);
        return view('contents.staff.kelas', [
            'kelas' => $kelas,
        ]);
    }

    public function store(Request $request) {
        DaftarKelas::create([
            'kodeKelas' => $request->kodeKelas,
            'kapasitas' => '40',
            'kodeMK' => $request->kodeMK,
            'kelas' => $request->kelas,
            'dosenNRP' => $request->dosen,
        ]);
    }

    public function delete($kodeMK, $kelas)
    {
        DaftarKelas::where([['kodeMK', $kodeMK], ['kelas', $kelas]])->delete();

        return redirect('/staff/kelas');
    }
}
