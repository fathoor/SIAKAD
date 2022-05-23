<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SuratAktifSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('surat_aktif')->insert([
            [
                'suratAktifNRP' => '5026201000',
                'periodeAktif' => 'GENAP 2022',
                'tanggalAjuan' => '2022-05-12',
                'keperluanSurat' => 'Lomba',
                'status' => true
            ],
            [
                'suratAktifNRP' => '5026201139',
                'periodeAktif' => 'GENAP 2022',
                'tanggalAjuan' => '2022-05-12',
                'keperluanSurat' => 'Lomba',
                'status' => true
            ],
        ]);
    }
}
