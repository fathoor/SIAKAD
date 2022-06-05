<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Maatwebsite\Excel\Facades\Excel;

class TranskripController extends Controller
{
    public function view(Request $request)
    {
        $format = $request->input('format');
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
        switch ($format) {
            case '1':
                return view('contents.mahasiswa.view-transkrip', ['sksTempuh' => $sksTempuh, 'sksLulus' => $sksLulus, 'mkPersiapan' => $mkPersiapan, 'mkSarjana' => $mkSarjana, 'ipPersiapan' => $ipPersiapan, 'ipSarjana' => $ipSarjana, 'ipk' => $ipk]);
                break;
            case '2':
                return view('contents.mahasiswa.view-transkrip-plain', ['sksTempuh' => $sksTempuh, 'sksLulus' => $sksLulus, 'mkPersiapan' => $mkPersiapan, 'mkSarjana' => $mkSarjana, 'ipPersiapan' => $ipPersiapan, 'ipSarjana' => $ipSarjana, 'ipk' => $ipk]);
                break;
            case '3':
                $nrp = auth()->user()->NRP;
                $nama = auth()->user()->nama;
                $phpWord = new \PhpOffice\PhpWord\PhpWord();

                $section = $phpWord->createSection();
                $section->addText('TRANSKRIP MATA KULIAH <w:br/>');

                $tableStyle = array('borderSize' => 1, 'borderColor' => 'black');
                $styleCell = array('borderSize' => 1, 'borderColor' => 'black');
                $fontStyle = array('size' => 11, 'name' => 'Times New Roman');
                $TfontStyle = array('bold' => true, 'size' => 11, 'name' => 'Times New Roman');

                $table = $section->addTable($tableStyle);
                $table->addRow(-0.5, array('exactHeight' => -5));
                $table->addCell(2500, $styleCell)->addText('NRP / Nama', $TfontStyle);
                $table->addCell(6000, $styleCell)->addText($nrp . ' / ' . $nama, $fontStyle);
                $table->addRow();
                $table->addCell(2500, $styleCell)->addText('SKS Tempuh / SKS Lulus', $TfontStyle);
                $table->addCell(6000, $styleCell)->addText($sksTempuh . ' / ' . $sksLulus, $fontStyle);
                $table->addRow();
                $table->addCell(2500, $styleCell)->addText('Status', $TfontStyle);
                $table->addCell(6000, $styleCell)->addText('Normal', $fontStyle);

                $section->addText('<w:br/> --- Tahap: Persiapan ---');
                $table2 = $section->addTable($tableStyle);
                $table2->addRow();
                $table2->addCell(1000, $styleCell)->addText('Kode', $fontStyle);
                $table2->addCell(4000, $styleCell)->addText('Nama Mata Kuliah', $fontStyle);
                $table2->addCell(500, $styleCell)->addText('SKS', $fontStyle);
                $table2->addCell(1500, $styleCell)->addText('Historis Nilai', $fontStyle);
                $table2->addCell(500, $styleCell)->addText('Nilai', $fontStyle);

                foreach ($mkPersiapan as $mkp) {
                    $semester = $mkp->periode;
                    $smt = explode(' ', $semester);
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
                    $table2->addRow();
                    $table2->addCell(1000, $styleCell)->addText($mkp->kodeMataKuliah, $fontStyle);
                    $table2->addCell(4000, $styleCell)->addText($mkp->namaMataKuliah, $fontStyle);
                    $table2->addCell(500, $styleCell)->addText($mkp->sks, $fontStyle);
                    $table2->addCell(1500, $styleCell)->addText($smt[0] . '/' . $smt[1] . '/' . $nilaiAngka, $fontStyle);
                    $table2->addCell(500, $styleCell)->addText($nilaiAngka, $fontStyle);
                }

                $section->addText('Total Sks Tahap Persiapan : ' . $mkPersiapan->sum('sks'));
                $section->addText('IP Tahap Persiapan : ' . $ipPersiapan);

                $section->addText('<w:br/> --- Tahap: Sarjana ---');
                $table3 = $section->addTable($tableStyle);
                $table3->addRow();
                $table3->addCell(1000, $styleCell)->addText('Kode', $fontStyle);
                $table3->addCell(4000, $styleCell)->addText('Nama Mata Kuliah', $fontStyle);
                $table3->addCell(500, $styleCell)->addText('SKS', $fontStyle);
                $table3->addCell(1500, $styleCell)->addText('Historis Nilai', $fontStyle);
                $table3->addCell(500, $styleCell)->addText('Nilai', $fontStyle);

                foreach ($mkSarjana as $mkp) {
                    $semester = $mkp->periode;
                    $smt = explode(' ', $semester);
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
                    $table3->addRow();
                    $table3->addCell(1000, $styleCell)->addText($mkp->kodeMataKuliah, $fontStyle);
                    $table3->addCell(4000, $styleCell)->addText($mkp->namaMataKuliah, $fontStyle);
                    $table3->addCell(500, $styleCell)->addText($mkp->sks, $fontStyle);
                    $table3->addCell(1500, $styleCell)->addText($smt[0] . '/' . $smt[1] . '/' . $nilaiAngka, $fontStyle);
                    $table3->addCell(500, $styleCell)->addText($nilaiAngka, $fontStyle);
                }

                $section->addText('Total Sks Tahap Sarjana : ' . $mkSarjana->sum('sks'));
                $section->addText('IP Tahap Sarjana : ' . $ipSarjana . '<w:br/>');

                $table4 = $section->addTable($tableStyle);
                $table4->addRow(-0.5, array('exactHeight' => -5));
                $table4->addCell(1000, $styleCell)->addText('Total SKS', $fontStyle);
                $table4->addCell(1000, $styleCell)->addText($mkPersiapan->sum('sks') + $mkSarjana->sum('sks'), $TfontStyle);
                $table4->addRow();
                $table4->addCell(1000, $styleCell)->addText('IPK', $fontStyle);
                $table4->addCell(1000, $styleCell)->addText($ipk, $TfontStyle);
                $section->addText('<w:br/> Judul Tugas Akhir / Thesis / Disertasi <w:br/>');

                $section->addText('CATATAN');
                $section->addText('Transkrip Akademik ini hanya berlaku untuk keperluan:');
                $section->addText('1. Pengajuan Beasiswa');
                $section->addText('2. Melamar Pekerjaan');
                $section->addText('3. Persyaratan Yudisium');
                $section->addText('4. Tunjangan Gaji');
                $section->addText('5. ........................................................... (tuliskan keperluannya)');

                $section->addText('<w:br/> Tanggal Cetak: ' . Carbon::now()->locale('id')
                    ->isoFormat('DD MMMM YYYY'));

                $file = 'Transkrip_Mata_Kuliah.docx';
                header("Content-Description: File Transfer");
                header('Content-Disposition: attachment; filename="' . $file . '"');
                header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
                header('Content-Transfer-Encoding: binary');
                header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
                header('Expires: 0');
                $xmlWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
                $xmlWriter->save("php://output");
                break;
            case '4':
                return Excel::download(new ExportController, 'Transkrip_Mata_Kuliah.xlsx');
                break;
        }
    }
}
