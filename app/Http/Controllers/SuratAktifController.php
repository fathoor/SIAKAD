<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuratAktif;
use Carbon\Carbon;

class SuratAktifController extends Controller
{
    public function index()
    {
        $aktif = SuratAktif::where('suratAktifNRP', auth()->user()->NRP)->get();

        return view('contents.suratMahasiswa-2', ['aktif' => $aktif]);
    }

    public function add()
    {
        return view('contents.suratMahasiswa');
    }

    public function store(Request $request)
    {
        $today = Carbon::now()->format('Y-m-d');

        SuratAktif::create([
            'suratAktifNRP' => auth()->user()->NRP,
            'periodeAktif' => $request->periode,
            'tanggalAjuan' => $today,
            'keperluanSurat' => $request->keperluan,
            'status' => false
        ]);

        return redirect('/suratAktif');
    }
}
