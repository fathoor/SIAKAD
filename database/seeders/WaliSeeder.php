<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WaliSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('wali')->insert([
            [
                'mahasiswaNRP' => 5026201139,
                'dosenNRP' => 5026201
            ],
            [
                'mahasiswaNRP' => 5026201130,
                'dosenNRP' => 5026202
            ],
            [
                'mahasiswaNRP' => 5026201141,
                'dosenNRP' => 5026203
            ],
            [
                'mahasiswaNRP' => 5026201054,
                'dosenNRP' => 5026204
            ],
            [
                'mahasiswaNRP' => 5026201045,
                'dosenNRP' => 5026205
            ],
            [
                'mahasiswaNRP' => 5026201115,
                'dosenNRP' => 5026206
            ],
            [
                'mahasiswaNRP' => 5026201096,
                'dosenNRP' => 5026207
            ],
            [
                'mahasiswaNRP' => 5026201109,
                'dosenNRP' => 5026208
            ],
            [
                'mahasiswaNRP' => 5026201007,
                'dosenNRP' => 5026202
            ],
            [
                'mahasiswaNRP' => 5026201000,
                'dosenNRP' => 5026201
            ],
        ]);
    }
}
