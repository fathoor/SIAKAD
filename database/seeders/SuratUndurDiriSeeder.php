<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SuratUndurDiriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('surat_undur_diri')->insert([
            [
                'suratUndurDiriNRP' => '5026201000',
                'periodeMundur' => 'Genap 2022',
                'tanggalAjuan' => '2022-05-10',
                'alasanMundur' => 'Kerja',
                'status' => false
            ],
            [
                'suratUndurDiriNRP' => '5026201139',
                'periodeMundur' => 'Genap 2022',
                'tanggalAjuan' => '2022-05-10',
                'alasanMundur' => 'Kerja',
                'status' => false
            ],
        ]);
    }
}
