<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Periode;

class PeriodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Periode::insert(
            [
                [
                    'periode' => '2020A',
                    'tglAwal' => '2020-08-23',
                    'tglAkhir' => '2020-12-30',
                    'awalPengisian' => '2020-11-23',
                    'akhirPengisian' => '2020-12-23',
                ],
                [
                    'periode' => '2020B',
                    'tglAwal' => '2021-01-31',
                    'tglAkhir' => '2021-06-29',
                    'awalPengisian' => '2021-05-23',
                    'akhirPengisian' => '2021-06-22',
                ],
                [
                    'periode' => '2021A',
                    'tglAwal' => '2021-08-23',
                    'tglAkhir' => '2021-12-30',
                    'awalPengisian' => '2021-11-23',
                    'akhirPengisian' => '2021-12-23',
                ],
                [
                    'periode' => '2021B',
                    'tglAwal' => '2022-01-31',
                    'tglAkhir' => '2022-06-29',
                    'awalPengisian' => '2022-05-23',
                    'akhirPengisian' => '2022-06-01',
                ]
            ]
        );
    }
}
