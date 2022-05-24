<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KuesionerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kuesioner')->insert([
            [
                'kodeKuesioner' => '2020A',
                'awalPengisian' => '2020-12-23',
                'akhirPengisian' => '2020-12-30',
            ],
            [
                'kodeKuesioner' => '2020B',
                'awalPengisian' => '2021-06-30',
                'akhirPengisian' => '2021-06-30',
            ],
            [
                'kodeKuesioner' => '2021A',
                'awalPengisian' => '2021-12-23',
                'akhirPengisian' => '2021-12-30',
            ],
            [
                'kodeKuesioner' => '2021B',
                'awalPengisian' => '2022-06-23',
                'akhirPengisian' => '2022-06-30',
            ]
        ]);
    }
}
