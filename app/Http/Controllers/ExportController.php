<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use App\Models\FRS;

class ExportController implements FromView
{

    public function view(): View
    {
        $matkul = FRS::join('mata_kuliah', 'frs.kodeMK', '=', 'mata_kuliah.kodeMataKuliah')
            ->where('frs.NRP', auth()->user()->NRP)
            ->get();
        $sksTempuh = $matkul->sum('sks');
        $sksLulus = $matkul->where('nilai', '>', '0')->sum('sks');
        $mkPersiapan = FRS::join('mata_kuliah', 'frs.kodeMK', '=', 'mata_kuliah.kodeMataKuliah')
            ->where([['NRP', auth()->user()->NRP], ['semester', '<', '3'], ['nilai', '>', '0']])
            ->get();
        $nilaiAngkaPersiapan = array();
        $sksPersiapan = array();
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
            array_push($sksPersiapan, $mkp->sks);
        }
        $totalPoinPersiapan = 0;
        for ($i = 0; $i < count($nilaiAngkaPersiapan); $i++) {
            if ($nilaiAngkaPersiapan[$i] == 'A') {
                $poinPersiapan = 4;
            } elseif ($nilaiAngkaPersiapan[$i] == 'AB') {
                $poinPersiapan = 3.5;
            } elseif ($nilaiAngkaPersiapan[$i] == 'B') {
                $poinPersiapan = 3;
            } elseif ($nilaiAngkaPersiapan[$i] == 'BC') {
                $poinPersiapan = 2.5;
            } elseif ($nilaiAngkaPersiapan[$i] == 'C') {
                $poinPersiapan = 2;
            } elseif ($nilaiAngkaPersiapan[$i] == 'D') {
                $poinPersiapan = 1;
            } else {
                $poinPersiapan = 0;
            }
            $totalPoinPersiapan += ($poinPersiapan * $sksPersiapan[$i]);
        }
        $totalSksPersiapan = $mkPersiapan->sum('sks');
        if ($totalSksPersiapan == 0) {
            $ipPersiapan = 0;
        } else {
            $ipPersiapan = $totalPoinPersiapan / $totalSksPersiapan;
        }

        $mkSarjana = FRS::join('mata_kuliah', 'frs.kodeMK', '=', 'mata_kuliah.kodeMataKuliah')
            ->where([['NRP', auth()->user()->NRP], ['semester', '>', '2'], ['nilai', '>', '0']])
            ->get();
        $nilaiAngkaSarjana = array();
        $sksSarjana = array();
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
            array_push($sksSarjana, $mkp->sks);
        }
        $totalPoinSarjana = 0;
        for ($i = 0; $i < count($nilaiAngkaSarjana); $i++) {
            if ($nilaiAngkaSarjana[$i] == 'A') {
                $poinPersiapan = 4;
            } elseif ($nilaiAngkaSarjana[$i] == 'AB') {
                $poinPersiapan = 3.5;
            } elseif ($nilaiAngkaSarjana[$i] == 'B') {
                $poinPersiapan = 3;
            } elseif ($nilaiAngkaSarjana[$i] == 'BC') {
                $poinPersiapan = 2.5;
            } elseif ($nilaiAngkaSarjana[$i] == 'C') {
                $poinPersiapan = 2;
            } elseif ($nilaiAngkaSarjana[$i] == 'D') {
                $poinPersiapan = 1;
            } else {
                $poinPersiapan = 0;
            }
            $totalPoinSarjana += ($poinPersiapan * $sksSarjana[$i]);
        }
        $totalSksSarjana = $mkSarjana->sum('sks');
        if ($totalSksSarjana == 0) {
            $ipSarjana = 0;
        } else {
            $ipSarjana = $totalPoinSarjana / $totalSksSarjana;
        }

        if ($totalSksSarjana == 0 && $totalSksPersiapan == 0) {
            $ipk = 0;
        } else {
            $ipk = ($totalPoinPersiapan + $totalPoinSarjana) / ($totalSksPersiapan + $totalSksSarjana);
        }
        return view('contents.mahasiswa.view-transkrip-excel', ['sksTempuh' => $sksTempuh, 'sksLulus' => $sksLulus, 'mkPersiapan' => $mkPersiapan, 'mkSarjana' => $mkSarjana, 'ipPersiapan' => $ipPersiapan, 'ipSarjana' => $ipSarjana, 'ipk' => $ipk]);
    }
}
