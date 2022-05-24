<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeriodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('periode')->insert(
            [
                [
                    'periode' => '2020A',
                    'tglAwal' => '2020-09-21',
                    'tglAkhir' => '2021-02-01'
                ],
                [
                    'periode' => '2020B',
                    'tglAwal' => '2021-03-01',
                    'tglAkhir' => '2021-07-23'
                ],
                [
                    'periode' => '2021A',
                    'tglAwal' => '2021-08-23',
                    'tglAkhir' => '2021-12-31'
                ],
                [
                    'periode' => '2020A',
                    'tglAwal' => '2022-01-31',
                    'tglAkhir' => '2022-06-15'
                ]
            ]
        );
    }
}
