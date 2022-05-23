<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TranskripSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transkrip')->insert([
            [
                'NRP' => 5026201139,
                'IPS1' => 4.00,
                'IPS2' => 4.00,
                'IPS3' => 4.00,
                'IPS4' => 0,
                'IPS5' => 0,
                'IPS6' => 0,
                'IPS7' => 0,
                'IPS8' => 0,
                'IPK' => 4.00
            ],
            [
                'NRP' => 5026201130,
                'IPS1' => 4.00,
                'IPS2' => 4.00,
                'IPS3' => 4.00,
                'IPS4' => 0,
                'IPS5' => 0,
                'IPS6' => 0,
                'IPS7' => 0,
                'IPS8' => 0,
                'IPK' => 4.00
            ],
            [
                'NRP' => 5026201141,
                'IPS1' => 4.00,
                'IPS2' => 4.00,
                'IPS3' => 4.00,
                'IPS4' => 0,
                'IPS5' => 0,
                'IPS6' => 0,
                'IPS7' => 0,
                'IPS8' => 0,
                'IPK' => 4.00
            ],
            [
                'NRP' => 5026201054,
                'IPS1' => 4.00,
                'IPS2' => 4.00,
                'IPS3' => 4.00,
                'IPS4' => 0,
                'IPS5' => 0,
                'IPS6' => 0,
                'IPS7' => 0,
                'IPS8' => 0,
                'IPK' => 4.00
            ],
            [
                'NRP' => 5026201045,
                'IPS1' => 4.00,
                'IPS2' => 4.00,
                'IPS3' => 4.00,
                'IPS4' => 0,
                'IPS5' => 0,
                'IPS6' => 0,
                'IPS7' => 0,
                'IPS8' => 0,
                'IPK' => 4.00
            ],
            [
                'NRP' => 5026201115,
                'IPS1' => 4.00,
                'IPS2' => 4.00,
                'IPS3' => 4.00,
                'IPS4' => 0,
                'IPS5' => 0,
                'IPS6' => 0,
                'IPS7' => 0,
                'IPS8' => 0,
                'IPK' => 4.00
            ],
            [
                'NRP' => 5026201096,
                'IPS1' => 4.00,
                'IPS2' => 4.00,
                'IPS3' => 4.00,
                'IPS4' => 0,
                'IPS5' => 0,
                'IPS6' => 0,
                'IPS7' => 0,
                'IPS8' => 0,
                'IPK' => 4.00
            ]
        ]);
    }
}
