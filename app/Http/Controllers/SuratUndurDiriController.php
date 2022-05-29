<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuratUndurDiri;
use Carbon\Carbon;

class SuratUndurDiriController extends Controller
{
    public function index()
    {
        $undur = SuratUndurDiri::where('suratUndurDiriNRP', auth()->user()->NRP)->get();
        $ada = SuratUndurDiri::where('suratUndurDiriNRP', auth()->user()->NRP)->exists();

        return view('contents.suratUndurDiri-2', ['undur' => $undur, 'ada' => $ada]);
    }

    public function add()
    {
        return view('contents.suratUndurDiri');
    }

    public function store(Request $request)
    {
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
    }
}