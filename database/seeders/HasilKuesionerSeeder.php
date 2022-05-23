<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HasilKuesionerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hasil_kuesioner')->insert([
            [
                'dosenNRP' => '5026201',
                'kodeMK' => 'IS184412',
                'jawaban1' => 5,
                'jawaban2' => 5,
                'jawaban3' => 5,
                'feedback' => 'Mengajar dengan baik dan memuaskan'
            ],
            [
                'dosenNRP' => '5026202',
                'kodeMK' => 'IS184410',
                'jawaban1' => 4,
                'jawaban2' => 4,
                'jawaban3' => 4,
                'feedback' => 'Mengajar dengan baik'
            ],
            [
                'dosenNRP' => '5026203',
                'kodeMK' => 'IS184411',
                'jawaban1' => 5,
                'jawaban2' => 5,
                'jawaban3' => 5,
                'feedback' => 'Mengajar dengan sangat baik'
            ],
            [
                'dosenNRP' => '5026204',
                'kodeMK' => 'IS184413',
                'jawaban1' => 5,
                'jawaban2' => 5,
                'jawaban3' => 4,
                'feedback' => 'Mengajar dengan baik dan memuaskan'
            ],
            [
                'dosenNRP' => '5026205',
                'kodeMK' => 'IS184414',
                'jawaban1' => 5,
                'jawaban2' => 4,
                'jawaban3' => 4,
                'feedback' => 'Mengajar dengan sangat memuaskan'
            ],
            [
                'dosenNRP' => '5026206',
                'kodeMK' => 'IS184415',
                'jawaban1' => 5,
                'jawaban2' => 5,
                'jawaban3' => 5,
                'feedback' => 'Mengajar dengan baik dan memuaskan, pelajaran dapat dipahami'
            ]
        ]);
    }
}
