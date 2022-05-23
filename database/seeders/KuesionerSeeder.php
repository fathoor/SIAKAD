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
                'awalPengisian' => '2020-11-09',
                'akhirPengisian' => '2020-11-16',
            ],
            [
                'kodeKuesioner' => '2020B',
                'awalPengisian' => '2021-05-09',
                'akhirPengisian' => '2021-05-17',
            ],
            [
                'kodeKuesioner' => '2021A',
                'awalPengisian' => '2021-11-09',
                'akhirPengisian' => '2021-11-17',
            ],
            [
                'kodeKuesioner' => '2021B',
                'awalPengisian' => '2022-05-09',
                'akhirPengisian' => '2022-05-17',
            ]
        ]);
    }
}
