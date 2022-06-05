<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Support\Facades\DB;

class ExportController implements FromView
{

    public function view(): View
    {
        $matkul = DB::table('frs')
            ->join('mata_kuliah', 'frs.kodeMK', '=', 'mata_kuliah.kodeMataKuliah')
            ->where('frs.NRP', auth()->user()->NRP)
            ->get();
        $mkPersiapan = DB::table('frs')
            ->join('mata_kuliah', 'frs.kodeMK', '=', 'mata_kuliah.kodeMataKuliah')
            ->join('dosen', 'frs.dosenNRP', '=', 'dosen.dosenNRP')
            ->where([
                ['frs.NRP', auth()->user()->NRP],
                ['nilai', '>', '0'],
                ['mata_kuliah.semester', '<', '3'],
            ])
            ->get();
        $nilaiAngkaPersiapan = array();
        $sksPersiapan = $mkPersiapan->sum('sks');
        foreach ($mkPersiapan as $mkp) {
            if (86 <= $mkp->nilai) {
                $nilaiAngka = 'A';
            } elseif (76 <= $mkp->nilai && $mkp->nilai <= 85) {
                $nilaiAngka = 'AB';
            } elseif (66 <= $mkp->nilai && $mkp->nilai <= 75) {
                $nilaiAngka = 'B';
            } elseif (61 <= $mkp->nilai && $mkp->nilai <= 65) {
                $nilaiAngka = 'BC';
            } elseif (56 <= $mkp->nilai && $mkp->nilai <= 60) {
                $nilaiAngka = 'C';
            } elseif (41 <= $mkp->nilai && $mkp->nilai <= 55) {
                $nilaiAngka = 'D';
            } else {
                $nilaiAngka = 'E';
            }
            array_push($nilaiAngkaPersiapan, $nilaiAngka);
        }
        $totalPoinPersiapan = 0;
        foreach ($nilaiAngkaPersiapan as $na) {
            if ($na == 'A') {
                $totalPoinPersiapan += 4;
            } elseif ($na == 'AB') {
                $totalPoinPersiapan += 3.5;
            } elseif ($na == 'B') {
                $totalPoinPersiapan += 3;
            } elseif ($na == 'BC') {
                $totalPoinPersiapan += 2.5;
            } elseif ($na == 'C') {
                $totalPoinPersiapan += 2;
            } elseif ($na == 'D') {
                $totalPoinPersiapan += 1;
            } else {
                $totalPoinPersiapan += 0;
            }
        }
        if ($sksPersiapan == 0) {
            $ipPersiapan = 0;
        } else {
            $ipPersiapan = $totalPoinPersiapan / $sksPersiapan;
        }

        $mkSarjana = DB::table('frs')
            ->join('mata_kuliah', 'frs.kodeMK', '=', 'mata_kuliah.kodeMataKuliah')
            ->join('dosen', 'frs.dosenNRP', '=', 'dosen.dosenNRP')
            ->where([
                ['frs.NRP', auth()->user()->NRP],
                ['nilai', '>', '0'],
                ['mata_kuliah.semester', '>', '2'],
            ])
            ->get();
        $nilaiAngkaSarjana = array();
        $sksSarjana = $mkSarjana->sum('sks');
        foreach ($mkSarjana as $mkp) {
            if (86 <= $mkp->nilai) {
                $nilaiAngka = 'A';
            } elseif (76 <= $mkp->nilai && $mkp->nilai <= 85) {
                $nilaiAngka = 'AB';
            } elseif (66 <= $mkp->nilai && $mkp->nilai <= 75) {
                $nilaiAngka = 'B';
            } elseif (61 <= $mkp->nilai && $mkp->nilai <= 65) {
                $nilaiAngka = 'BC';
            } elseif (56 <= $mkp->nilai && $mkp->nilai <= 60) {
                $nilaiAngka = 'C';
            } elseif (41 <= $mkp->nilai && $mkp->nilai <= 55) {
                $nilaiAngka = 'D';
            } else {
                $nilaiAngka = 'E';
            }
            array_push($nilaiAngkaSarjana, $nilaiAngka);
        }
        $totalPoinSarjana = 0;
        foreach ($nilaiAngkaSarjana as $na) {
            if ($na == 'A') {
                $totalPoinSarjana += 4;
            } elseif ($na == 'AB') {
                $totalPoinSarjana += 3.5;
            } elseif ($na == 'B') {
                $totalPoinSarjana += 3;
            } elseif ($na == 'BC') {
                $totalPoinSarjana += 2.5;
            } elseif ($na == 'C') {
                $totalPoinSarjana += 2;
            } elseif ($na == 'D') {
                $totalPoinSarjana += 1;
            } else {
                $totalPoinSarjana += 0;
            }
        }
        if ($sksSarjana == 0) {
            $ipSarjana = 0;
        } else {
            $ipSarjana = $totalPoinSarjana / $sksSarjana;
        }

        if ($sksSarjana == 0 && $sksPersiapan == 0) {
            $ipk = 0;
        } else {
            $ipk = ($totalPoinPersiapan + $totalPoinSarjana) / ($sksPersiapan + $sksSarjana);
        }

        $sksTempuh = $matkul->sum('sks');
        $sksLulus = $matkul->where('nilai', '>', '0')->sum('sks');
        return view('contents.mahasiswa.view-transkrip-excel', ['sksTempuh' => $sksTempuh, 'sksLulus' => $sksLulus, 'mkPersiapan' => $mkPersiapan, 'mkSarjana' => $mkSarjana, 'ipPersiapan' => $ipPersiapan, 'ipSarjana' => $ipSarjana, 'ipk' => $ipk]);
    }
}
