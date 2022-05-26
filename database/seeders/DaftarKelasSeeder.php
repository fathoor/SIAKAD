<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DaftarKelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('daftar_kelas')->insert([
            [
                'kodeKelas' => 'SI1101',
                'kapasitas' => '40',
            ],
            [
                'kodeKelas' => 'SI1102',
                'kapasitas' => '40',
            ],
            [
                'kodeKelas' => 'SI1201',
                'kapasitas' => '40',
            ],
            [
                'kodeKelas' => 'SI1202',
                'kapasitas' => '40',
            ],
            [
                'kodeKelas' => 'SI2101',
                'kapasitas' => '40',
            ],
            [
                'kodeKelas' => 'SI2102',
                'kapasitas' => '40',
            ],
            [
                'kodeKelas' => 'SI2201',
                'kapasitas' => '40',
            ],
            [
                'kodeKelas' => 'SI2202',
                'kapasitas' => '40',
            ],
            [
                'kodeKelas' => 'SI4101',
                'kapasitas' => '40',
            ],
            [
                'kodeKelas' => 'SI4102',
                'kapasitas' => '40',
            ],
            [
                'kodeKelas' => 'SI4201',
                'kapasitas' => '40',
            ],
            [
                'kodeKelas' => 'SI4202',
                'kapasitas' => '40',
            ],
        ]);
    }
}
