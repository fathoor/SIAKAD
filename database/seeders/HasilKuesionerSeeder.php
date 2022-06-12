<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\HasilKuesioner;

class HasilKuesionerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HasilKuesioner::insert([
            [
                'dosenNRP' => '5026201',
                'periode' => 'Genap 2021',
                'kodeMK' => 'IS184412',
                'jawaban1' => 5,
                'jawaban2' => 5,
                'jawaban3' => 5,
                'jawaban4' => 4,
                'jawaban5' => 3,
                'jawaban6' => 2,
                'jawaban7' => 1,
                'jawaban8' => 1,
                'jawaban9' => 2,
                'jawaban10' => 3,
                'jawaban11' => 4,
                'jawaban12' => 5,
                'komentar' => 'Mengajar dengan baik dan memuaskan'
            ],
            [
                'dosenNRP' => '5026202',
                'periode' => 'Genap 2021',
                'kodeMK' => 'IS184410',
                'jawaban1' => 4,
                'jawaban2' => 4,
                'jawaban3' => 4,
                'jawaban4' => 4,
                'jawaban5' => 3,
                'jawaban6' => 2,
                'jawaban7' => 1,
                'jawaban8' => 1,
                'jawaban9' => 2,
                'jawaban10' => 3,
                'jawaban11' => 4,
                'jawaban12' => 5,
                'komentar' => 'Mengajar dengan baik'
            ],
            [
                'dosenNRP' => '5026203',
                'periode' => 'Genap 2021',
                'kodeMK' => 'IS184411',
                'jawaban1' => 5,
                'jawaban2' => 5,
                'jawaban3' => 5,
                'jawaban4' => 4,
                'jawaban5' => 3,
                'jawaban6' => 2,
                'jawaban7' => 1,
                'jawaban8' => 1,
                'jawaban9' => 2,
                'jawaban10' => 3,
                'jawaban11' => 4,
                'jawaban12' => 5,
                'komentar' => 'Mengajar dengan sangat baik'
            ],
            [
                'dosenNRP' => '5026204',
                'periode' => 'Genap 2021',
                'kodeMK' => 'IS184413',
                'jawaban1' => 5,
                'jawaban2' => 5,
                'jawaban3' => 4,
                'jawaban4' => 4,
                'jawaban5' => 3,
                'jawaban6' => 2,
                'jawaban7' => 1,
                'jawaban8' => 1,
                'jawaban9' => 2,
                'jawaban10' => 3,
                'jawaban11' => 4,
                'jawaban12' => 5,
                'komentar' => 'Mengajar dengan baik dan memuaskan'
            ],
            [
                'dosenNRP' => '5026205',
                'periode' => 'Genap 2021',
                'kodeMK' => 'IS184414',
                'jawaban1' => 5,
                'jawaban2' => 4,
                'jawaban3' => 4,
                'jawaban4' => 4,
                'jawaban5' => 3,
                'jawaban6' => 2,
                'jawaban7' => 1,
                'jawaban8' => 1,
                'jawaban9' => 2,
                'jawaban10' => 3,
                'jawaban11' => 4,
                'jawaban12' => 5,
                'komentar' => 'Mengajar dengan sangat memuaskan'
            ],
            [
                'dosenNRP' => '5026206',
                'periode' => 'Genap 2021',
                'kodeMK' => 'IS184415',
                'jawaban1' => 5,
                'jawaban2' => 5,
                'jawaban3' => 5,
                'jawaban4' => 4,
                'jawaban5' => 3,
                'jawaban6' => 2,
                'jawaban7' => 1,
                'jawaban8' => 1,
                'jawaban9' => 2,
                'jawaban10' => 3,
                'jawaban11' => 4,
                'jawaban12' => 5,
                'komentar' => 'Mengajar dengan baik dan memuaskan, pelajaran dapat dipahami'
            ]
        ]);
    }
}
