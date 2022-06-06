<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DaftarKuesionerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('daftar_kuesioner')->insert([
            [
                'dosenNRP' => '5026201',
                'kodeMK' => 'IS184412',
                'periode' => 'Genap 2021'
            ],
        ]);
    }
}
