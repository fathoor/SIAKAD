<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagihanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tagihan')->insert([
            [
                'SPP' => 3500000,
                'pelayaran' => 0,
                'tunggakPelayaran' => 0,
                'SPI' => 0,
                'IPITS' => 0,
                'penyegaran' => 0,
                'tunggakSPP' => 0,
                'tunggakSPI' => 0,
                'tunggakIPITS' => 0,
                'tunggakPenyegaran' => 0
            ],
            [
                'SPP' => 2500000,
                'pelayaran' => 0,
                'tunggakPelayaran' => 0,
                'SPI' => 0,
                'IPITS' => 0,
                'penyegaran' => 0,
                'tunggakSPP' => 0,
                'tunggakSPI' => 0,
                'tunggakIPITS' => 0,
                'tunggakPenyegaran' => 0
            ],
            [
                'SPP' => 4500000,
                'pelayaran' => 0,
                'tunggakPelayaran' => 0,
                'SPI' => 0,
                'IPITS' => 0,
                'penyegaran' => 0,
                'tunggakSPP' => 0,
                'tunggakSPI' => 0,
                'tunggakIPITS' => 0,
                'tunggakPenyegaran' => 0
            ],
            [
                'SPP' => 5500000,
                'pelayaran' => 0,
                'tunggakPelayaran' => 0,
                'SPI' => 0,
                'IPITS' => 0,
                'penyegaran' => 0,
                'tunggakSPP' => 0,
                'tunggakSPI' => 0,
                'tunggakIPITS' => 0,
                'tunggakPenyegaran' => 0
            ]
        ]);
    }
}
