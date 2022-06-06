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
            // 5026201000 - Ganjil 2020
            [
                'NRP' => 5026201000,
                'kodeMK' => 'IS184102',
                'kelas' => 'A',
                'dosenNRP' => 5026226,
                'nilai' => 86,
                'periode' => 'Ganjil 2020',
                'matkulAtas' => false
            ],
            [
                'NRP' => 5026201000,
                'kodeMK' => 'IS184101',
                'kelas' => 'A',
                'dosenNRP' => 5026213,
                'nilai' => 86,
                'periode' => 'Ganjil 2020',
                'matkulAtas' => false
            ],
            // 5026201000 - Genap 2020
            [
                'NRP' => 5026201000,
                'kodeMK' => 'IS184203',
                'kelas' => 'A',
                'dosenNRP' => 5026202,
                'nilai' => 86,
                'periode' => 'Genap 2020',
                'matkulAtas' => false
            ],
            [
                'NRP' => 5026201000,
                'kodeMK' => 'IS184204',
                'kelas' => 'A',
                'dosenNRP' => 5026223,
                'nilai' => 86,
                'periode' => 'Genap 2020',
                'matkulAtas' => false
            ],
            // 5026201000 - Ganjil 2021
            [
                'NRP' => 5026201000,
                'kodeMK' => 'IS184308',
                'kelas' => 'A',
                'dosenNRP' => 5026213,
                'nilai' => 86,
                'periode' => 'Ganjil 2021',
                'matkulAtas' => false
            ],
            [
                'NRP' => 5026201000,
                'kodeMK' => 'IS184310',
                'kelas' => 'A',
                'dosenNRP' => 5026234,
                'nilai' => 76,
                'periode' => 'Ganjil 2021',
                'matkulAtas' => false
            ],
            [
                'NRP' => 5026201000,
                'kodeMK' => 'IS184309',
                'kelas' => 'A',
                'dosenNRP' => 5026211,
                'nilai' => 86,
                'periode' => 'Ganjil 2021',
                'matkulAtas' => false
            ],
            [
                'NRP' => 5026201000,
                'kodeMK' => 'IW184301',
                'kelas' => 'A',
                'dosenNRP' => 5026221,
                'nilai' => 76,
                'periode' => 'Ganjil 2021',
                'matkulAtas' => false
            ],
            [
                'NRP' => 5026201000,
                'kodeMK' => 'IS184305',
                'kelas' => 'A',
                'dosenNRP' => 5026202,
                'nilai' => 86,
                'periode' => 'Ganjil 2021',
                'matkulAtas' => false
            ],
            // 5026201000 - Genap 2021
            [
                'NRP' => 5026201000,
                'kodeMK' => 'IS184411',
                'kelas' => 'A',
                'dosenNRP' => 5026212,
                'nilai' => 90,
                'periode' => 'Genap 2021',
                'matkulAtas' => false
            ],
            [
                'NRP' => 5026201000,
                'kodeMK' => 'IS184412',
                'kelas' => 'A',
                'dosenNRP' => 5026203,
                'nilai' => 90,
                'periode' => 'Genap 2021',
                'matkulAtas' => false
            ],
            [
                'NRP' => 5026201000,
                'kodeMK' => 'IS184413',
                'kelas' => 'A',
                'dosenNRP' => 5026207,
                'nilai' => 90,
                'periode' => 'Genap 2021',
                'matkulAtas' => false
            ],
            [
                'NRP' => 5026201000,
                'kodeMK' => 'IS184414',
                'kelas' => 'A',
                'dosenNRP' => 5026234,
                'nilai' => 90,
                'periode' => 'Genap 2021',
                'matkulAtas' => false
            ],
            [
                'NRP' => 5026201000,
                'kodeMK' => 'IS184621',
                'kelas' => 'A',
                'dosenNRP' => 5026226,
                'nilai' => 90,
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
