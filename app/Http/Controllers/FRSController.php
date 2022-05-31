<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FRSController extends Controller
{
    public function indexDosen()
    {
        $dosen = DB::table('dosen')->get();

        $mahasiswa = DB::table('wali')
        ->where('dosenNRP', auth()->user()->NRP)
        ->leftjoin('akun', 'akun.NRP', '=', 'wali.mahasiswaNRP')
        ->get();

        $frs = DB::table('frs')
        ->leftjoin('mata_kuliah', 'mata_kuliah.kodeMataKuliah', '=', 'frs.kodeMK')
        ->leftjoin('dosen', function($join){
            $join->on('dosen.dosenKodeMK', '=', 'frs.kodeMK');
            $join->on('dosen.dosenNRP', '=', 'frs.dosenNRP');})
        ->orderBy('kodeMK', 'asc')
        ->get();

        $status = DB::table('frs_status')->get();

        return view('contents.dosen.frs', [
            'dosen' => $dosen,
            'mahasiswa' => $mahasiswa,
            'frs' => $frs,
            'status' => $status
        ]);
    }

    public function accept(Request $request, $NRP)
    {
        DB::table('frs_status')->where('NRP', $NRP)->update([
            'NRP' => $NRP,
            'status' => $request->input('accept')
        ]);

        return redirect('/dosen/FRS');
    }
}
