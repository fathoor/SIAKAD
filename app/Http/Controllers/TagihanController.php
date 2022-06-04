<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tagihan;

class TagihanController extends Controller
{
    public function index()
    {
        $tagihan = Tagihan::where('NRP', auth()->user()->NRP)->get();
        return view('contents.mahasiswa.ukt', ['tagihan' => $tagihan]);
    }

    public function detail(Request $request)
    {
        $detail = Tagihan::where([
            ['NRP', auth()->user()->NRP],
            ['periodeTagihan', $request->periode]
        ])->first();
        return view('contents.mahasiswa.detail-ukt', ['detail' => $detail]);
    }
}
