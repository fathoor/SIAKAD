<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FRSStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('frs_status')->insert([
            [
                'NRP' => 5026201139,
                'periode' => 'Genap 2021',
                'status' => false
            ],
            [
                'NRP' => 5026201000,
                'periode' => 'Genap 2021',
                'status' => false
            ],
        ]);
    }
}
