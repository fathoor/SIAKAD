<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dosen')->insert([
            [
                'dosenNRP' => 5026201,
                'dosenNama' => 'Radityo Prasetianto Wibowo',
                'dosenKodeMK' => 'IS184412',
                'isWali' => true
            ],
            [
                'dosenNRP' => 5026202,
                'dosenNama' => 'Mahendrawathi',
                'dosenKodeMK' => 'IS184410',
                'isWali' => true
            ],
            [
                'dosenNRP' => 5026203,
                'dosenNama' => 'Bekti Cahyo Hidayanto',
                'dosenKodeMK' => 'IS184411',
                'isWali' => true
            ],
            [
                'dosenNRP' => 5026204,
                'dosenNama' => 'Nisfu Asrul Sani',
                'dosenKodeMK' => 'IS184413',
                'isWali' => true
            ],
            [
                'dosenNRP' => 5026205,
                'dosenNama' => 'Faizal Johan Atletiko',
                'dosenKodeMK' => 'IS184414',
                'isWali' => true
            ],
            [
                'dosenNRP' => 5026206,
                'dosenNama' => 'Faizal Mahananto',
                'dosenKodeMK' => 'IS184415',
                'isWali' => true
            ],
        ]);
    }
}
