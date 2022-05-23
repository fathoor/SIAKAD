<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SuratMahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('surat_mahasiswa')->insert([
            [
                'suratMahasiswaNRP' => '5026201000',
                'tipeSurat' => 'suratAktif',
                'kodeSurat' => '001/I/2022/ITS',
                'tanggalAjuan' => '2022-05-11',
                'status' => true
            ],
            [
                'suratMahasiswaNRP' => '5026201000',
                'tipeSurat' => 'suratCuti',
                'kodeSurat' => '002/II/2022/ITS',
                'tanggalAjuan' => '2022-05-12',
                'status' => true
            ],
            [
                'suratMahasiswaNRP' => '5026201000',
                'tipeSurat' => 'suratUndurDiri',
                'kodeSurat' => '003/III/2022/ITS',
                'tanggalAjuan' => '2022-05-13',
                'status' => true
            ],
        ]);
    }
}
