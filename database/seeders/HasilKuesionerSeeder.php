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
                'NIP' => '3456789',
                'kodeMK' => 'IS184101',
                'jawaban1' => 5,
                'jawaban2' => 5,
                'jawaban3' => 5,
                'feedback' => 'Mengajar dengan baik dan memuaskan'
            ],
            [
                'NIP' => '4127712',
                'kodeMK' => 'IS184101',
                'jawaban1' => 4,
                'jawaban2' => 4,
                'jawaban3' => 4,
                'feedback' => 'Mengajar dengan baik'
            ],
            [
                'NIP' => '4029129',
                'kodeMK' => 'IS184307',
                'jawaban1' => 5,
                'jawaban2' => 5,
                'jawaban3' => 5,
                'feedback' => 'Mengajar dengan sangat baik'
            ],
            [
                'NIP' => '6626121',
                'kodeMK' => 'IS184414',
                'jawaban1' => 5,
                'jawaban2' => 5,
                'jawaban3' => 4,
                'feedback' => 'Mengajar dengan baik dan memuaskan'
            ],
            [
                'NIP' => '3673811',
                'kodeMK' => 'IS184414',
                'jawaban1' => 5,
                'jawaban2' => 4,
                'jawaban3' => 4,
                'feedback' => 'Mengajar dengan sangat memuaskan'
            ],
            [
                'NIP' => '4371202',
                'kodeMK' => 'IS184412',
                'jawaban1' => 5,
                'jawaban2' => 5,
                'jawaban3' => 5,
                'feedback' => 'Mengajar dengan baik dan memuaskan, pelajaran dapat dipahami'
            ]
        ]);
    }
}
