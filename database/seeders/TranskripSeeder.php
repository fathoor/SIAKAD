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
                'IPS1' => 3.50,
                'IPS2' => 3.50,
                'IPS3' => 3.50,
                'IPS4' => 0,
                'IPS5' => 0,
                'IPS6' => 0,
                'IPS7' => 0,
                'IPS8' => 0,
                'IPK' => 3.50
            ],
            [
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
                'IPS1' => 3.00,
                'IPS2' => 3.00,
                'IPS3' => 3.00,
                'IPS4' => 0,
                'IPS5' => 0,
                'IPS6' => 0,
                'IPS7' => 0,
                'IPS8' => 0,
                'IPK' => 3.00
            ],
            [
                'IPS1' => 3.50,
                'IPS2' => 3.50,
                'IPS3' => 3.00,
                'IPS4' => 0,
                'IPS5' => 0,
                'IPS6' => 0,
                'IPS7' => 0,
                'IPS8' => 0,
                'IPK' => 3.33
            ]
        ]);
    }
}
