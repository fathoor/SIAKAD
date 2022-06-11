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
use App\Models\MataKuliah;

class FRSController extends Controller
{
    public function indexDosen(Request $request)
    {
        if($request->periode != ''){
            $periode = $request->periode;
        }else{
            $periode = 'Genap 2021';
        }

        $dosen = Dosen::where('dosenNRP', auth()->user()->NRP)->first();

        $mahasiswa = Wali::where('dosenNRP', auth()->user()->NRP)
        ->join('akun', 'akun.NRP', '=', 'wali.mahasiswaNRP')
        ->join('frs_status', 'frs_status.NRP', '=', 'wali.mahasiswaNRP')
        ->get();

        $frs = FRS::where('periode', $periode)
        ->join('mata_kuliah', 'mata_kuliah.kodeMataKuliah', '=', 'frs.kodeMK')
        ->join('dosen', function($join){
            $join->on('dosen.dosenKodeMK', '=', 'frs.kodeMK');
            $join->on('dosen.dosenNRP', '=', 'frs.dosenNRP');})
        ->orderBy('kodeMK', 'ASC')
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

    public function ips($periode)
    {
        $sks = FRS::where([['frs.NRP', auth()->user()->NRP], ['periode', $periode]])
        ->join('mata_kuliah', 'mata_kuliah.kodeMataKuliah', '=', 'frs.kodeMK')
        ->sum('sks');

        $ips = FRS::where([['frs.NRP', auth()->user()->NRP], ['periode', $periode]])
        ->join('mata_kuliah', 'mata_kuliah.kodeMataKuliah', '=', 'frs.kodeMK')
        ->get();

        $nilai = 0;
        foreach($ips as $s){
            if(0 < $s->nilai && $s->nilai <= 40){
                $nilai += 0*$s->sks;
            }elseif(40 < $s->nilai && $s->nilai <= 55){
                $nilai += 1*$s->sks;
            }elseif(55 < $s->nilai && $s->nilai <= 60){
                $nilai += 2*$s->sks;
            }elseif(60 < $s->nilai && $s->nilai <= 65){
                $nilai += 2.5*$s->sks;
            }elseif(65 < $s->nilai && $s->nilai <= 75){
                $nilai += 3*$s->sks;
            }elseif(75 < $s->nilai && $s->nilai <= 85){
                $nilai += 3.5*$s->sks;
            }elseif(85 < $s->nilai){
                $nilai += 4*$s->sks;
            }
        }

        return ($nilai/$sks);
    }

    public function ipk()
    {
        $ipk = FRS::where('frs.NRP', auth()->user()->NRP)
        ->select('periode')->groupBy('periode')->get();

        $nilai = 0;
        foreach($ipk as $k){
            $nilai += $this->ips($k->periode);
        }

        return ($nilai/$ipk->count());
    }

    public function index(Request $request)
    {
        $startDate = Carbon::createFromFormat('Y-m-d','2022-01-31');
        $endDate = Carbon::createFromFormat('Y-m-d','2022-02-05');
        $check = Carbon::now()->between($startDate,$endDate);

        if($request->periode != ''){
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
        ->orderBy('kodeMK', 'ASC')
        ->get();

        $sks = FRS::where([['frs.NRP', auth()->user()->NRP], ['periode', $periode]])
        ->join('mata_kuliah', 'mata_kuliah.kodeMataKuliah', '=', 'frs.kodeMK')
        ->sum('sks');

        $ips = $this->ips($periode);

        $ipk = $this->ipk();

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
            'awal' => $startDate, 'akhir' => $endDate,
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

        $insertSKS = MataKuliah::where('kodeMataKuliah',$kodeMK)
        ->first()->sks;

        $insertMK  = MataKuliah::where('kodeMataKuliah',$kodeMK)
        ->first()
        ->kodeMataKuliah;

        $existedMK = FRS::where([['NRP', auth()->user()->NRP],['periode', $periode]])
        ->get()
        ->implode('kodeMK',',');

        $insertedMK = MataKuliah::where('kodeMataKuliah',$kodeMK)
        ->first()
        ->namaMataKuliah;

        $existedmahasiswa = FRS::where([['kodeMK', $kodeMK],['periode', $periode],['kelas',$kelas]])
        ->count('NRP');

        $existedKapasitas = DaftarKelas::where([['kodeMK', $kodeMK],['kelas',$kelas]])
        ->first()
        ->kapasitas;



        switch($request->action){
            case 'ambil':
                if(str_contains($existedMK,$insertMK)){
                    return redirect('/frs')->with('message', 'Mata Kuliah Telah Diambil!');
                }elseif($sks + $insertSKS > 24){
                    return redirect('/frs')->with('message', 'SKS Melebihi Batas!');
                }elseif( $existedmahasiswa >= $existedKapasitas){
                    return redirect('/frs')->with('message', 'Kelas Telah Penuh!');
                }else{
                    FRS::insert([
                        'NRP' => auth()->user()->NRP,
                        'kodeMK' => $kodeMK,
                        'kelas' => $kelas,
                        'dosenNRP' => $dosen,
                        'nilai' => 0,
                        'periode' => $periode,
                        'matkulAtas' => filter_var($matkulAtas, FILTER_VALIDATE_BOOLEAN)
                    ]);
                    return redirect('/frs')->with('success', "Mata Kuliah ".$insertedMK." Berhasil Diambil!");
                }
                break;
            case 'peserta':
                return redirect('/peserta/'.$kodeMK.'/'.$kelas);
                break;
        }
    }
}
