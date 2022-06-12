<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SuratAktif;

class SuratAktifSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SuratAktif::insert([
            [
                'suratAktifNRP' => '5026201000',
                'type' => 'Surat Keterangan Aktif',
                'periodeAktif' => 'Genap 2021',
                'tanggalAjuan' => '2022-05-12',
                'keperluanSurat' => 'Lomba',
                'status' => true
            ],
            [
                'suratAktifNRP' => '5026201139',
                'type' => 'Surat Keterangan Aktif',
                'periodeAktif' => 'Genap 2021',
                'tanggalAjuan' => '2022-05-12',
                'keperluanSurat' => 'Beasiswa',
                'status' => true
            ],
            [
                'suratAktifNRP' => '5026201007',
                'type' => 'Surat Keterangan Aktif',
                'periodeAktif' => 'Genap 2021',
                'tanggalAjuan' => '2022-05-12',
                'keperluanSurat' => 'Beasiswa',
                'status' => true
            ],
            [
                'suratAktifNRP' => '5026201045',
                'type' => 'Surat Keterangan Aktif',
                'periodeAktif' => 'Genap 2021',
                'tanggalAjuan' => '2022-05-12',
                'keperluanSurat' => 'Beasiswa',
                'status' => true
            ],
            [
                'suratAktifNRP' => '5026201054',
                'type' => 'Surat Keterangan Aktif',
                'periodeAktif' => 'Genap 2021',
                'tanggalAjuan' => '2022-05-12',
                'keperluanSurat' => 'Beasiswa',
                'status' => true
            ],
            [
                'suratAktifNRP' => '5026201068',
                'type' => 'Surat Keterangan Aktif',
                'periodeAktif' => 'Genap 2021',
                'tanggalAjuan' => '2022-05-12',
                'keperluanSurat' => 'Beasiswa',
                'status' => true
            ],
            [
                'suratAktifNRP' => '5026201091',
                'type' => 'Surat Keterangan Aktif',
                'periodeAktif' => 'Genap 2021',
                'tanggalAjuan' => '2022-05-12',
                'keperluanSurat' => 'Beasiswa',
                'status' => true
            ],
            [
                'suratAktifNRP' => '5026201096',
                'type' => 'Surat Keterangan Aktif',
                'periodeAktif' => 'Genap 2021',
                'tanggalAjuan' => '2022-05-12',
                'keperluanSurat' => 'Beasiswa',
                'status' => true
            ],
            [
                'suratAktifNRP' => '5026201115',
                'type' => 'Surat Keterangan Aktif',
                'periodeAktif' => 'Genap 2021',
                'tanggalAjuan' => '2022-05-12',
                'keperluanSurat' => 'Beasiswa',
                'status' => true
            ],
            [
                'suratAktifNRP' => '5026201130',
                'type' => 'Surat Keterangan Aktif',
                'periodeAktif' => 'Genap 2021',
                'tanggalAjuan' => '2022-05-12',
                'keperluanSurat' => 'Beasiswa',
                'status' => true
            ],
            [
                'suratAktifNRP' => '5026201141',
                'type' => 'Surat Keterangan Aktif',
                'periodeAktif' => 'Genap 2021',
                'tanggalAjuan' => '2022-05-12',
                'keperluanSurat' => 'Beasiswa',
                'status' => true
            ],
        ]);
    }
}
