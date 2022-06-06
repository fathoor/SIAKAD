<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuratAktif;
use App\Models\SuratCuti;
use App\Models\SuratUndurDiri;
use Carbon\Carbon;

class SuratController extends Controller
{
    public function index($type)
    {
        switch ($type)
        {
            case 'Aktif':
                $aktif = SuratAktif::where('suratAktifNRP', auth()->user()->NRP)->get();

                return view('contents.mahasiswa.suratMahasiswa-2', ['aktif' => $aktif]);
                break;
            case 'Cuti':
                $cuti = SuratCuti::where('suratCutiNRP', auth()->user()->NRP)->get();

                return view('contents.mahasiswa.suratCuti', ['cuti' => $cuti]);
                break;
            case 'UndurDiri':
                $undur = SuratUndurDiri::where('suratUndurDiriNRP', auth()->user()->NRP)->get();
                $ada = SuratUndurDiri::where('suratUndurDiriNRP', auth()->user()->NRP)->exists();

                return view('contents.mahasiswa.suratUndurDiri-2', ['undur' => $undur, 'ada' => $ada]);
                break;
        }
    }

    public function add($type)
    {
        switch ($type)
        {
            case 'Aktif':
                return view('contents.mahasiswa.suratMahasiswa');
                break;
            case 'Cuti':
                return view('contents.mahasiswa.suratCuti-2');
                break;
            case 'UndurDiri':
                return view('contents.mahasiswa.suratUndurDiri');
                break;
        }
    }

    public function store(Request $request, $type)
    {
        switch ($type)
        {
            case 'Aktif':
                $today = Carbon::now()->format('Y-m-d');

                SuratAktif::create([
                    'suratAktifNRP' => auth()->user()->NRP,
                    'type' => 'Surat Keterangan Aktif',
                    'periodeAktif' => $request->periode,
                    'tanggalAjuan' => $today,
                    'keperluanSurat' => $request->keperluan,
                    'status' => false
                ]);

                return redirect('/suratAktif');
                break;
            case 'Cuti':
                $today = Carbon::now()->format('Y-m-d');

                SuratCuti::create([
                    'suratCutiNRP' => auth()->user()->NRP,
                    'type' => 'Surat Cuti',
                    'periodeCuti' => $request->periode,
                    'jumlahSemesterCuti' => $request->semester,
                    'tanggalAjuan' => $today,
                    'alasanCuti' => $request->alasan,
                    'status' => false
                ]);

                return redirect('/suratCuti');
                break;
            case 'UndurDiri':
                $today = Carbon::now()->format('Y-m-d');

                SuratUndurDiri::create([
                    'suratUndurDiriNRP' => auth()->user()->NRP,
                    'type' => 'Surat Mengundurkan Diri',
                    'periodeMundur' => $request->periode,
                    'tanggalAjuan' => $today,
                    'alasanCuti' => $request->alasan,
                    'status' => false
                ]);

                return redirect('/suratUndurDiri');
                break;
        }
    }

    public function cetak($type, $id)
    {
        switch($type){
            case 'Aktif':
                $surat = SuratAktif::find($id)->first();
                break;
            case 'Cuti':
                $surat = SuratCuti::find($id)->first();
                break;
            case 'UndurDiri':
                $surat = SuratUndurDiri::find($id)->first();
                break;
        }

        return view('contents.mahasiswa.surat', ['type' => $type, 'surat' => $surat]);
    }
}
