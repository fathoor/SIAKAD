<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SuratCutiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('surat_cuti')->insert([
            [
                'suratCutiNRP' => '5026201000',
                'type' => 'Surat Cuti',
                'periodeCuti' => 'Genap 2022',
                'jumlahSemesterCuti' => 1,
                'tanggalAjuan' => '2022-05-10',
                'alasanCuti' => 'Sakit',
                'status' => true
            ],
            [
                'suratCutiNRP' => '5026201139',
                'type' => 'Surat Cuti',
                'periodeCuti' => 'Ganjil 2022',
                'jumlahSemesterCuti' => 1,
                'tanggalAjuan' => '2022-05-10',
                'alasanCuti' => 'Sakit',
                'status' => true
            ],
        ]);
    }
}
