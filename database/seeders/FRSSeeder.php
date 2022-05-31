<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FRSSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('frs')->insert([
            [
                'NRP' => 5026201139,
                'kodeMK' => 'IS184412',
                'kelas' => 'C',
                'dosenNRP' => 5026201,
                'nilai' => 0,
                'periode' => 'Genap 2021',
                'matkulAtas' => false
            ],
            [
                'NRP' => 5026201139,
                'kodeMK' => 'IS184413',
                'kelas' => 'B',
                'dosenNRP' => 5026210,
                'nilai' => 0,
                'periode' => 'Genap 2021',
                'matkulAtas' => false
            ],
            [
                'NRP' => 5026201139,
                'kodeMK' => 'IS184414',
                'kelas' => 'A',
                'dosenNRP' => 5026211,
                'nilai' => 0,
                'periode' => 'Genap 2021',
                'matkulAtas' => false
            ],
            [
                'NRP' => 5026201139,
                'kodeMK' => 'IS184621',
                'kelas' => 'C',
                'dosenNRP' => 5026212,
                'nilai' => 0,
                'periode' => 'Genap 2021',
                'matkulAtas' => false
            ],
            [
                'NRP' => 5026201139,
                'kodeMK' => 'IS184624',
                'kelas' => 'C',
                'dosenNRP' => 5026213,
                'nilai' => 0,
                'periode' => 'Genap 2021',
                'matkulAtas' => true
            ],
        ]);
    }
}
