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
                'tanggalPengisian' => '2020-11-09',
                'status' => true
            ],
            [
                'kodeKuesioner' => '2020B',
                'tanggalPengisian' => '2021-05-09',
                'status' => true
            ],
            [
                'kodeKuesioner' => '2021A',
                'tanggalPengisian' => '2021-11-09',
                'status' => true
            ],
            [
                'kodeKuesioner' => '2021B',
                'tanggalPengisian' => '2022-05-09',
                'status' => false
            ]
        ]);
    }
}
