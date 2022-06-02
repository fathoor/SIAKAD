<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\FRS;

class FRSSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FRS::insert([
            // 5026201000 - Genap 2021
            [
                'NRP' => 5026201000,
                'kodeMK' => 'IS184411',
                'kelas' => 'A',
                'dosenNRP' => 5026212,
                'nilai' => 0,
                'periode' => 'Genap 2021',
                'matkulAtas' => false
            ],
            [
                'NRP' => 5026201000,
                'kodeMK' => 'IS184412',
                'kelas' => 'A',
                'dosenNRP' => 5026203,
                'nilai' => 0,
                'periode' => 'Genap 2021',
                'matkulAtas' => false
            ],
            [
                'NRP' => 5026201000,
                'kodeMK' => 'IS184413',
                'kelas' => 'A',
                'dosenNRP' => 5026207,
                'nilai' => 0,
                'periode' => 'Genap 2021',
                'matkulAtas' => false
            ],
            [
                'NRP' => 5026201000,
                'kodeMK' => 'IS184414',
                'kelas' => 'A',
                'dosenNRP' => 5026234,
                'nilai' => 0,
                'periode' => 'Genap 2021',
                'matkulAtas' => false
            ],
            [
                'NRP' => 5026201000,
                'kodeMK' => 'IS184621',
                'kelas' => 'A',
                'dosenNRP' => 5026226,
                'nilai' => 0,
                'periode' => 'Genap 2021',
                'matkulAtas' => false
            ],
            // 5026201139 - Genap 2021
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
                'dosenNRP' => 5026214,
                'nilai' => 0,
                'periode' => 'Genap 2021',
                'matkulAtas' => false
            ],
            [
                'NRP' => 5026201139,
                'kodeMK' => 'IS184414',
                'kelas' => 'A',
                'dosenNRP' => 5026234,
                'nilai' => 0,
                'periode' => 'Genap 2021',
                'matkulAtas' => false
            ],
            [
                'NRP' => 5026201139,
                'kodeMK' => 'IS184621',
                'kelas' => 'C',
                'dosenNRP' => 5026221,
                'nilai' => 0,
                'periode' => 'Genap 2021',
                'matkulAtas' => false
            ],
            [
                'NRP' => 5026201139,
                'kodeMK' => 'IS184624',
                'kelas' => 'C',
                'dosenNRP' => 5026237,
                'nilai' => 0,
                'periode' => 'Genap 2021',
                'matkulAtas' => true
            ],
            // 5026201054 - Genap 2021
            [
                'NRP' => 5026201054,
                'kodeMK' => 'IS184412',
                'kelas' => 'C',
                'dosenNRP' => 5026201,
                'nilai' => 0,
                'periode' => 'Genap 2021',
                'matkulAtas' => false
            ],
            [
                'NRP' => 5026201054,
                'kodeMK' => 'IS184413',
                'kelas' => 'B',
                'dosenNRP' => 5026214,
                'nilai' => 0,
                'periode' => 'Genap 2021',
                'matkulAtas' => false
            ],
            [
                'NRP' => 5026201054,
                'kodeMK' => 'IS184414',
                'kelas' => 'A',
                'dosenNRP' => 5026234,
                'nilai' => 0,
                'periode' => 'Genap 2021',
                'matkulAtas' => false
            ],
            [
                'NRP' => 5026201054,
                'kodeMK' => 'IS184621',
                'kelas' => 'C',
                'dosenNRP' => 5026221,
                'nilai' => 0,
                'periode' => 'Genap 2021',
                'matkulAtas' => false
            ],
            [
                'NRP' => 5026201054,
                'kodeMK' => 'IS184624',
                'kelas' => 'C',
                'dosenNRP' => 5026237,
                'nilai' => 0,
                'periode' => 'Genap 2021',
                'matkulAtas' => true
            ],
            // 5026201115 - Genap 2021
            [
                'NRP' => 5026201115,
                'kodeMK' => 'IS184412',
                'kelas' => 'C',
                'dosenNRP' => 5026201,
                'nilai' => 0,
                'periode' => 'Genap 2021',
                'matkulAtas' => false
            ],
            [
                'NRP' => 5026201115,
                'kodeMK' => 'IS184413',
                'kelas' => 'C',
                'dosenNRP' => 5026207,
                'nilai' => 0,
                'periode' => 'Genap 2021',
                'matkulAtas' => false
            ],
            [
                'NRP' => 5026201115,
                'kodeMK' => 'IS184414',
                'kelas' => 'A',
                'dosenNRP' => 5026234,
                'nilai' => 0,
                'periode' => 'Genap 2021',
                'matkulAtas' => false
            ],
            [
                'NRP' => 5026201115,
                'kodeMK' => 'IS184621',
                'kelas' => 'B',
                'dosenNRP' => 5026226,
                'nilai' => 0,
                'periode' => 'Genap 2021',
                'matkulAtas' => false
            ],
            [
                'NRP' => 5026201115,
                'kodeMK' => 'IS184624',
                'kelas' => 'C',
                'dosenNRP' => 5026237,
                'nilai' => 0,
                'periode' => 'Genap 2021',
                'matkulAtas' => true
            ],
        ]);
    }
}
