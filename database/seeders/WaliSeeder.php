<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Wali;

class WaliSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Wali::insert([
            [
                'mahasiswaNRP' => 5026201139,
                'dosenNRP' => 5026201
            ],
            [
                'mahasiswaNRP' => 5026201130,
                'dosenNRP' => 5026201
            ],
            [
                'mahasiswaNRP' => 5026201141,
                'dosenNRP' => 5026201
            ],
            [
                'mahasiswaNRP' => 5026201054,
                'dosenNRP' => 5026201
            ],
            [
                'mahasiswaNRP' => 5026201045,
                'dosenNRP' => 5026201
            ],
            [
                'mahasiswaNRP' => 5026201115,
                'dosenNRP' => 5026201
            ],
            [
                'mahasiswaNRP' => 5026201096,
                'dosenNRP' => 5026202
            ],
            [
                'mahasiswaNRP' => 5026201109,
                'dosenNRP' => 5026202
            ],
            [
                'mahasiswaNRP' => 5026201007,
                'dosenNRP' => 5026202
            ],
            [
                'mahasiswaNRP' => 5026201000,
                'dosenNRP' => 5026202
            ],
            [
                'mahasiswaNRP' => 5026201068,
                'dosenNRP' => 5026202
            ],
            [
                'mahasiswaNRP' => 5026201091,
                'dosenNRP' => 5026202
            ],
        ]);
    }
}
