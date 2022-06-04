<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TranskripController extends Controller
{
    public function view(Request $request)
    {
        $format = $request->input('format');
        $mkSKS = DB::table('frs')
            ->join('mata_kuliah', 'frs.kodeMK', '=', 'mata_kuliah.kodeMataKuliah')
            ->where('frs.NRP', auth()->user()->NRP)
            ->get();
        $sksTempuh = $mkSKS->sum('sks');
        $sksLulus = $mkSKS->where('nilai', '>', '0')->sum('sks');
        switch($format) {
            case '1':
                return view('contents.mahasiswa.view-transkrip', ['sksTempuh' => $sksTempuh, 'sksLulus' => $sksLulus]);
                break;
            case '2':
                return view('contents.mahasiswa.transkrip.excel');
                break;
            case '3':
                return view('contents.mahasiswa.transkrip.pdf');
                break;
            case '4':
                return view('contents.mahasiswa.transkrip.word');
                break;
        }
    }
}
