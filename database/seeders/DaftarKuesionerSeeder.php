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
                'NRP' => '5026201130',
                'kodeMK' => 'IS184101',
                'status' => true
            ],
            [
                'NRP' => '5026201130',
                'kodeMK' => 'IS184203',
                'status' => true
            ],
            [
                'NRP' => '5026201130',
                'kodeMK' => 'IS184204',
                'status' => true
            ],
            [
                'NRP' => '5026201130',
                'kodeMK' => 'IS184308',
                'status' => true
            ],
            [
                'NRP' => '5026201130',
                'kodeMK' => 'IS184310',
                'status' => true
            ],
            [
                'NRP' => '5026201130',
                'kodeMK' => 'IS184307',
                'status' => true
            ],
            [
                'NRP' => '5026201130',
                'kodeMK' => 'IS184309',
                'status' => true
            ],
            [
                'NRP' => '5026201130',
                'kodeMK' => 'IW184301',
                'status' => true
            ],
            [
                'NRP' => '5026201130',
                'kodeMK' => 'IS184412',
                'status' => false
            ],
            [
                'NRP' => '5026201130',
                'kodeMK' => 'IS184414',
                'status' => false
            ],
        ]);
    }
}
