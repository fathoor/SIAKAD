<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Dosen;
use App\Models\Wali;
use App\Models\FRS;
use App\Models\FRSStatus;
use App\Models\DaftarKelas;

class FRSController extends Controller
{
    public function indexDosen(Request $request)
    {
        if ($request->periode != ''){
            $periode = $request->periode;
        }else{
            $periode = 'Genap 2021';
        }

        $dosen = Dosen::where('dosenNRP', auth()->user()->NRP)->first();

        $mahasiswa = Wali::where('dosenNRP', auth()->user()->NRP)
        ->join('akun', 'akun.NRP', '=', 'wali.mahasiswaNRP')
        ->join('frs_status', 'frs_status.NRP', '=', 'wali.mahasiswaNRP')
        ->get();

        $frs = FRS::join('mata_kuliah', 'mata_kuliah.kodeMataKuliah', '=', 'frs.kodeMK')
        ->join('dosen', function($join){
            $join->on('dosen.dosenKodeMK', '=', 'frs.kodeMK');
            $join->on('dosen.dosenNRP', '=', 'frs.dosenNRP');})
        ->orderBy('kodeMK', 'asc')
        ->get();

        $status = FRSStatus::where('periode', $periode)->get();

        return view('contents.dosen.frs', [
            'dosen' => $dosen,
            'mahasiswa' => $mahasiswa,
            'frs' => $frs,
            'status' => $status,
            'periode' => $periode
        ]);
    }

    public function accept(Request $request, $NRP)
    {
        FRSStatus::where('NRP', $NRP)->update([
            'NRP' => $NRP,
            'status' => $request->input('accept')
        ]);

        return redirect('/dosen/FRS');
    }

    public function index(Request $request)
    {
        if ($request->periode != ''){
            $periode = $request->periode;
        }else{
            $periode = 'Genap 2021';
        }

        $frs = FRS::where([['frs.NRP', auth()->user()->NRP], ['periode', $periode]])
        ->join('mata_kuliah', 'mata_kuliah.kodeMataKuliah', '=', 'frs.kodeMK')
        ->join('dosen', function($join){
            $join->on('dosen.dosenKodeMK', '=', 'frs.kodeMK');
            $join->on('dosen.dosenNRP', '=', 'frs.dosenNRP');})
        ->orderBy('kodeMK', 'asc')
        ->get();

        $sks = FRS::where([['frs.NRP', auth()->user()->NRP], ['periode', $periode]])
        ->join('mata_kuliah', 'mata_kuliah.kodeMataKuliah', '=', 'frs.kodeMK')
        ->sum('sks');

        $ips = FRS::where([['frs.NRP', auth()->user()->NRP], ['periode', $periode]])
        ->avg('nilai');

        $ipk = FRS::where('frs.NRP', auth()->user()->NRP)
        ->avg('nilai');

        $kelas = DaftarKelas::join('mata_kuliah', 'mata_kuliah.kodeMataKuliah', '=', 'daftar_kelas.kodeMK')
        ->orderBy('semester', 'ASC')
        ->orderBy('kodeMK', 'ASC')
        ->orderBy('kelas', 'ASC')
        ->get();

        $peserta = FRSStatus::where([['frs_status.periode', 'Genap 2021'], ['status', true]])
        ->join('frs', 'frs.NRP', '=', 'frs_status.NRP')
        ->join('mata_kuliah', 'mata_kuliah.kodeMataKuliah', '=', 'frs.kodeMK')
        ->select('kodeMK', 'kelas', DB::raw('count(*) as total'))
        ->groupBy('kodeMK', 'kelas')
        ->get();
        
        $mahasiswa = Wali::where('mahasiswaNRP', auth()->user()->NRP)
        ->join('akun', 'akun.NRP', '=', 'wali.dosenNRP')
        ->join('frs_status', 'frs_status.NRP', '=', 'wali.mahasiswaNRP')
        ->first();

        return view('contents.mahasiswa.frs', [
            'frs' => $frs, 'sks' => $sks, 'periode' => $periode,
            'ips' => $ips, 'ipk' => $ipk,
            'kelas' => $kelas, 'peserta' => $peserta,
            'mahasiswa' => $mahasiswa
        ]);
        
    }
}
