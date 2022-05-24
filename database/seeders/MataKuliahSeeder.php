<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MataKuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mata_kuliah')->insert([
            [
                'kodeMataKuliah' => 'IS184101',
                'namaMataKuliah' => 'Konsep Sistem Informasi',
                'sks' => 2,
                'tahunKurikulum' => 2018,
                'semester' => 1
            ],
            [
                'kodeMataKuliah' => 'IS184203',
                'namaMataKuliah' => 'Algoritma & Pemrograman',
                'sks' => 3,
                'tahunKurikulum' => 2018,
                'semester' => 2
            ],
            [
                'kodeMataKuliah' => 'IS184204',
                'namaMataKuliah' => 'Organisasi dan Fungsional Bisnis',
                'sks' => 3,
                'tahunKurikulum' => 2018,
                'semester' => 2
            ],
            [
                'kodeMataKuliah' => 'IS184308',
                'namaMataKuliah' => 'Manajemen & Proses TI',
                'sks' => 3,
                'tahunKurikulum' => 2018,
                'semester' => 3
            ],
            [
                'kodeMataKuliah' => 'IS184310',
                'namaMataKuliah' => 'Manajemen Proses Bisnis',
                'sks' => 4,
                'tahunKurikulum' => 2018,
                'semester' => 3
            ],
            [
                'kodeMataKuliah' => 'IS184307',
                'namaMataKuliah' => 'Pemrograman Web',
                'sks' => 3,
                'tahunKurikulum' => 2018,
                'semester' => 3
            ],
            [
                'kodeMataKuliah' => 'IS184309',
                'namaMataKuliah' => 'Rekayasa Kebutuhan Perangkat Lunak',
                'sks' => 3,
                'tahunKurikulum' => 2018,
                'semester' => 3
            ],
            [
                'kodeMataKuliah' => 'IW184301',
                'namaMataKuliah' => 'Sistem Basis Data',
                'sks' => 4,
                'tahunKurikulum' => 2018,
                'semester' => 3
            ],
            [
                'kodeMataKuliah' => 'IS184412',
                'namaMataKuliah' => 'Rancang Bangun Perangkat Lunak',
                'sks' => 4,
                'tahunKurikulum' => 2018,
                'semester' => 4
            ],
            [
                'kodeMataKuliah' => 'IS184414',
                'namaMataKuliah' => 'Sistem Enterprise',
                'sks' => 4,
                'tahunKurikulum' => 2018,
                'semester' => 4
            ],
            
        ]);
    }
}
