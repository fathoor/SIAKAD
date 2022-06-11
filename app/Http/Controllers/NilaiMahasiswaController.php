<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FRS;
use App\Models\FRSStatus;
use App\Models\Dosen;

class NilaiMahasiswaController extends Controller
{
    public function index(Request $request)
    {
        if($request->periode != ''){
            $periode = $request->periode;
        }else{
            $periode = 'Genap 2021';
        }

        $dosen = Dosen::where('dosenNRP', auth()->user()->NRP)->first();

        $matakuliah = FRS::where([['periode', $periode], ['frs.dosenNRP', auth()->user()->NRP]])
        ->join('mata_kuliah', 'mata_kuliah.kodeMataKuliah', '=', 'frs.kodeMK')
        ->select('kodeMK', 'namaMataKuliah')
        ->groupBy('kodeMK', 'namaMataKuliah')
        ->get();

        $frs = FRS::where([['periode', $periode], ['frs.dosenNRP', auth()->user()->NRP]])
        ->join('akun', 'akun.NRP', '=', 'frs.NRP')
        ->join('mata_kuliah', 'mata_kuliah.kodeMataKuliah', '=', 'frs.kodeMK')
        ->join('dosen', function($join){
            $join->on('dosen.dosenKodeMK', '=', 'frs.kodeMK');
            $join->on('dosen.dosenNRP', '=', 'frs.dosenNRP');})
        ->orderBy('frs.NRP', 'asc')
        ->get();

        $status = FRSStatus::where('periode', $periode)->get();

        return view('contents.dosen.nilaiMahasiswa', [
            'periode' => $periode,
            'matakuliah' => $matakuliah,
            'dosen' => $dosen,
            'frs' => $frs,
            'status' => $status,
        ]);
    }
    
    public function update(Request $request, $NRP)
    {
        FRS::where([['NRP', $NRP], ['kodeMK', $request->kodeMK]])->update([
            'nilai' => $request->nilai,
        ]);

        return redirect('/dosen/nilai');
    }
}
