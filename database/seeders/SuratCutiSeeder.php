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
                'periodeCuti' => 'GENAP 2022',
                'alasanCuti' => 'Sakit',
                'jumlahSemesterCuti' => 1
            ],
        ]);
    }
}
