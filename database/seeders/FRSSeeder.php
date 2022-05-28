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
                'NRP' => 5026201000,
                'kodeMK' => 'IS184412',
                'kelas' => 'A',
                'status' => false
            ],
            [
                'NRP' => 5026201139,
                'kodeMK' => 'IS184101',
                'kelas' => 'A',
                'status' => false
            ],
            [
                'NRP' => 5026201139,
                'kodeMK' => 'IS184203',
                'kelas' => 'A',
                'status' => false
            ],
            [
                'NRP' => 5026201139,
                'kodeMK' => 'IS184204',
                'kelas' => 'A',
                'status' => false
            ],
            [
                'NRP' => 5026201139,
                'kodeMK' => 'IS184308',
                'kelas' => 'A',
                'status' => false
            ],
            [
                'NRP' => 5026201139,
                'kodeMK' => 'IS184310',
                'kelas' => 'A',
                'status' => false
            ],
            [
                'NRP' => 5026201139,
                'kodeMK' => 'IS184307',
                'kelas' => 'A',
                'status' => false
            ],
            [
                'NRP' => 5026201139,
                'kodeMK' => 'IS184309',
                'kelas' => 'A',
                'status' => false
            ],
            [
                'NRP' => 5026201139,
                'kodeMK' => 'IW184301',
                'kelas' => 'A',
                'status' => false
            ],
            [
                'NRP' => 5026201139,
                'kodeMK' => 'IS184412',
                'kelas' => 'A',
                'status' => false
            ],
            [
                'NRP' => 5026201139,
                'kodeMK' => 'IS184414',
                'kelas' => 'A',
                'status' => false
            ],
        ]);
    }
}
