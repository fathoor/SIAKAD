<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;
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
        $startDate = Carbon::createFromFormat('Y-m-d','2022-01-31');
        $endDate = Carbon::createFromFormat('Y-m-d','2022-02-05');
        $check = Carbon::now()->between($startDate,$endDate);

        if ($request->periode != ''){
            $periode = $request->periode;
        }else{
            $periode = 'Genap 2021';
        }

        $status = FRSStatus::where([['periode', $periode], ['NRP', auth()->user()->NRP]])->first();

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

        $peserta = FRSStatus::where('frs_status.periode', 'Genap 2021')
        ->join('frs', 'frs.NRP', '=', 'frs_status.NRP')
        ->join('mata_kuliah', 'mata_kuliah.kodeMataKuliah', '=', 'frs.kodeMK')
        ->get();
        
        $mahasiswa = Wali::where('mahasiswaNRP', auth()->user()->NRP)
        ->join('akun', 'akun.NRP', '=', 'wali.dosenNRP')
        ->join('frs_status', 'frs_status.NRP', '=', 'wali.mahasiswaNRP')
        ->first();

        return view('contents.mahasiswa.frs', [
            'check' => $check, 'status' => $status,
            'frs' => $frs, 'sks' => $sks, 'periode' => $periode,
            'ips' => $ips, 'ipk' => $ipk,
            'kelas' => $kelas, 'peserta' => $peserta,
            'mahasiswa' => $mahasiswa
        ]);
    }

    public function store(Request $request)
    {
        $kodeMK = Str::substr($request->matakuliah, 0, 8);
        $kelas = Str::substr($request->matakuliah, 9, 1);
        $dosen = Str::substr($request->matakuliah, 11, 7);
        $matkulAtas = Str::substr($request->matakuliah, 19, 1);
        $periode = Str::substr($request->matakuliah, 21);

        $sks = FRS::where([['frs.NRP', auth()->user()->NRP], ['periode', $periode]])
        ->join('mata_kuliah', 'mata_kuliah.kodeMataKuliah', '=', 'frs.kodeMK')
        ->sum('sks');

        switch($request->action){
            case 'ambil':
                if($sks < 24){
                    FRS::insert([
                        'NRP' => auth()->user()->NRP,
                        'kodeMK' => $kodeMK,
                        'kelas' => $kelas,
                        'dosenNRP' => $dosen,
                        'nilai' => 0,
                        'periode' => $periode,
                        'matkulAtas' => filter_var($matkulAtas, FILTER_VALIDATE_BOOLEAN)
                    ]);

                    return redirect('/frs');
                }else{
                    return redirect('/frs')->with('message', 'SKS Melebihi Batas!');
                }
                break;
            case 'peserta':
                return redirect('/peserta/'.$kodeMK.'/'.$kelas);
                break;
        }
    }
}
