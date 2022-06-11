<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Tagihan;

class TagihanController extends Controller
{
    public function index()
    {
        $tagihan = Tagihan::where('NRP', auth()->user()->NRP)
        ->orderBy('status', 'ASC')
        ->orderBy('periodeTagihan', 'DESC')
        ->get();

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

    public function indexStaff()
    {
        $tagihan = Tagihan::join('akun', 'akun.NRP', '=', 'tagihan.NRP')
        ->orderBy('status', 'ASC')
        ->orderBy('periodeTagihan', 'DESC')
        ->orderBy('tagihan.NRP', 'ASC')
        ->paginate(10);
        
        return view('contents.staff.ukt', ['tagihan' => $tagihan]);
    }

    public function detailStaff(Request $request)
    {
        $detail = Tagihan::join('akun', 'akun.NRP', '=', 'tagihan.NRP')
        ->where([['periodeTagihan', $request->periode], ['tagihan.NRP', $request->NRP]])
        ->first();

        return view('contents.staff.ukt-2', ['detail' => $detail]);
    }

    public function verificate(Request $request, $NRP, $periode)
    {
        $today = Carbon::now()->format('Y-m-d');

        Tagihan::where([['NRP', $NRP], ['periodeTagihan', $periode]])
        ->update([
            'status' => $request->accept,
            'tanggal' => $today
        ]);

        return redirect('/staff/ukt');
    }
}
