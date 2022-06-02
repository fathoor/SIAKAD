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
                'kodeKelas' => 'SI4102',
                'kapasitas' => '40',
                'namaMK' => 'Sistem Enterprise A',
                'kodeMK' => 'IS184414',
                'dosenPengampu' => 'Mahendrawathi Er., ST., M.Sc., Ph.D.',
            ],
            [
                'kodeKelas' => 'SI4102',
                'kapasitas' => '40',
                'namaMK' => 'Sistem Enterprise B',
                'kodeMK' => 'IS184414',
                'dosenPengampu' => 'Mahendrawathi Er., ST., M.Sc., Ph.D.',
            ],
            [
                'kodeKelas' => 'SI4101',
                'kapasitas' => '35',
                'namaMK' => 'Rancang Bangun Perangkat Lunak A',
                'kodeMK' => 'IS184412',
                'dosenPengampu' => 'Radityo Prasetianto Wibowo, S.Kom, M.Kom.',
            ],
            [
                'kodeKelas' => 'SI4101',
                'kapasitas' => '35',
                'namaMK' => 'Rancang Bangun Perangkat Lunak B',
                'kodeMK' => 'IS184412',
                'dosenPengampu' => 'Radityo Prasetianto Wibowo, S.Kom, M.Kom.',
            ],
            [
                'kodeKelas' => 'SI2202',
                'kapasitas' => '40',
                'namaMK' => 'Sistem Basis Data A',
                'kodeMK' => 'IW184301',
                'dosenPengampu' => 'Faizal Mahananto, S.Kom., M.Eng., Ph.D.',
            ],
            [
                'kodeKelas' => 'SI2202',
                'kapasitas' => '40',
                'namaMK' => 'Sistem Basis Data B',
                'kodeMK' => 'IW184301',
                'dosenPengampu' => 'Faizal Mahananto, S.Kom., M.Eng., Ph.D.',
            ],
            [
                'kodeKelas' => 'SI1101',
                'kapasitas' => '40',
                'namaMK' => 'Rekayasa Kebutuhan Perangkat Lunak A',
                'kodeMK' => 'IS184309',
                'dosenPengampu' => 'Bekti Cahyo Hidayanto, S.Si., M.Kom.',
            ],
            [
                'kodeKelas' => 'SI1101',
                'kapasitas' => '40',
                'namaMK' => 'Rekayasa Kebutuhan Perangkat Lunak B',
                'kodeMK' => 'IS184309',
                'dosenPengampu' => 'Bekti Cahyo Hidayanto, S.Si., M.Kom.',
            ],
            [
                'kodeKelas' => 'SI4101',
                'kapasitas' => '40',
                'namaMK' => 'Organisasi dan Fungsional Bisnis A',
                'kodeMK' => 'IS184204',
                'dosenPengampu' => 'Edwin Riksakomara, S.Kom., M.T.',
            ],
            [
                'kodeKelas' => 'SI4101',
                'kapasitas' => '40',
                'namaMK' => 'Organisasi dan Fungsional Bisnis B',
                'kodeMK' => 'IS184204',
                'dosenPengampu' => 'Edwin Riksakomara, S.Kom., M.T.',
            ],
            [
                'kodeKelas' => 'SI4201',
                'kapasitas' => '40',
                'namaMK' => 'Manajemen & Proses TI A',
                'kodeMK' => 'IS184308',
                'dosenPengampu' => 'Ir. Achmad Holil Noor Ali, M.Kom.',
            ],
            [
                'kodeKelas' => 'SI4201',
                'kapasitas' => '40',
                'namaMK' => 'Manajemen & Proses TI B',
                'kodeMK' => 'IS184308',
                'dosenPengampu' => 'Ir. Achmad Holil Noor Ali, M.Kom.',
            ],
            [
                'kodeKelas' => 'SI2101',
                'kapasitas' => '40',
                'namaMK' => 'Manajemen Proses Bisnis A',
                'kodeMK' => 'IS184310',
                'dosenPengampu' => 'Ika Nurkasanah, S.Kom, M.Sc.',
            ],
            [
                'kodeKelas' => 'SI2101',
                'kapasitas' => '40',
                'namaMK' => 'Manajemen Proses Bisnis B',
                'kodeMK' => 'IS184310',
                'dosenPengampu' => 'Ika Nurkasanah, S.Kom, M.Sc.',
            ],
            [
                'kodeKelas' => 'SI2201',
                'kapasitas' => '40',
                'namaMK' => 'Algoritma & Pemrograman A',
                'kodeMK' => 'IS184203',
                'dosenPengampu' => 'Ahmad Mukhlason, S.Kom., M.Sc., Ph.D.',
            ],
            [
                'kodeKelas' => 'SI2201',
                'kapasitas' => '40',
                'namaMK' => 'Algoritma & Pemrograman B',
                'kodeMK' => 'IS184203',
                'dosenPengampu' => 'Ahmad Mukhlason, S.Kom., M.Sc., Ph.D.',
            ],
            [
                'kodeKelas' => 'SI1101',
                'kapasitas' => '40',
                'namaMK' => 'Pemrograman Web A',
                'kodeMK' => 'IS184307',
                'dosenPengampu' => 'Faizal Johan Atletiko, S.Kom, MT.',
            ],
            [
                'kodeKelas' => 'SI1101',
                'kapasitas' => '40',
                'namaMK' => 'Pemrograman Web B',
                'kodeMK' => 'IS184307',
                'dosenPengampu' => 'Faizal Johan Atletiko, S.Kom, MT.',
            ],
            [
                'kodeKelas' => 'SI2201',
                'kapasitas' => '40',
                'namaMK' => 'Konsep Sistem Informasi A',
                'kodeMK' => 'IS184101',
                'dosenPengampu' => 'Retno Aulia Vinarti, S.Kom., M.Kom., Ph.D.',
            ],
            [
                'kodeKelas' => 'SI2201',
                'kapasitas' => '40',
                'namaMK' => 'Konsep Sistem Informasi B',
                'kodeMK' => 'IS184101',
                'dosenPengampu' => 'Retno Aulia Vinarti, S.Kom., M.Kom., Ph.D.',
            ]
        ]);
    }
}
