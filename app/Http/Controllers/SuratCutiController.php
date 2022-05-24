<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuratCuti;
use Carbon\Carbon;

class SuratCutiController extends Controller
{
    public function index()
    {
        $cuti = SuratCuti::where('suratCutiNRP', auth()->user()->NRP)->get();

        return view('contents.suratCuti', ['cuti' => $cuti]);
    }

    public function add()
    {
        return view('contents.suratCuti-2');
    }

    public function store(Request $request)
    {
        $today = Carbon::now()->format('Y-m-d');

        SuratCuti::create([
            'suratCutiNRP' => auth()->user()->NRP,
            'periodeCuti' => $request->periode,
            'jumlahSemesterCuti' => $request->semester,
            'tanggalAjuan' => $today,
            'alasanCuti' => $request->alasan,
            'status' => false
        ]);

        return redirect('/suratCuti');
    }
}
