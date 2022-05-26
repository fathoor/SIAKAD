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
                'dosenNama' => 'Radityo Prasetianto Wibowo, S.Kom, M.Kom.',
                'dosenKodeMK' => 'IS184412',
                'isWali' => true
            ],
            [
                'dosenNRP' => 5026202,
                'dosenNama' => 'Mahendrawathi Er., ST., M.Sc., Ph.D.',
                'dosenKodeMK' => 'IS184414',
                'isWali' => true
            ],
            [
                'dosenNRP' => 5026203,
                'dosenNama' => 'Bekti Cahyo Hidayanto, S.Si., M.Kom.',
                'dosenKodeMK' => 'IS184309',
                'isWali' => true
            ],
            [
                'dosenNRP' => 5026204,
                'dosenNama' => 'Ika Nurkasanah, S.Kom, M.Sc.',
                'dosenKodeMK' => 'IS184310',
                'isWali' => true
            ],
            [
                'dosenNRP' => 5026205,
                'dosenNama' => 'Faizal Johan Atletiko, S.Kom, MT.',
                'dosenKodeMK' => 'IS184307',
                'isWali' => true
            ],
            [
                'dosenNRP' => 5026206,
                'dosenNama' => 'Faizal Mahananto, S.Kom., M.Eng., Ph.D.',
                'dosenKodeMK' => 'IW184301',
                'isWali' => true
            ],
            [
                'dosenNRP' => 5026207,
                'dosenNama' => 'Retno Aulia Vinarti, S.Kom., M.Kom., Ph.D.',
                'dosenKodeMK' => 'IS184101',
                'isWali' => true
            ],
            [
                'dosenNRP' => 5026208,
                'dosenNama' => 'Ahmad Mukhlason, S.Kom., M.Sc., Ph.D.',
                'dosenKodeMK' => 'IS184203',
                'isWali' => true
            ],
            [
                'dosenNRP' => 5026209,
                'dosenNama' => 'Edwin Riksakomara, S.Kom., M.T.',
                'dosenKodeMK' => 'IS184204',
                'isWali' => false
            ],
            [
                'dosenNRP' => 5026210,
                'dosenNama' => 'Ir. Achmad Holil Noor Ali, M.Kom.',
                'dosenKodeMK' => 'IS184308',
                'isWali' => false
            ],
        ]);
    }
}
