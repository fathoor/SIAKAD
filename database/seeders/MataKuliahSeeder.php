<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MataKuliah;

class MataKuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MataKuliah::insert([
            [
                'kodeMataKuliah' => 'IS184102',
                'kodeKelas' => 'SI1101',
                'namaMataKuliah' => 'Konsep Sistem Informasi',
                'sks' => 2,
                'tahunKurikulum' => 2018,
                'semester' => 1
            ],
            [
                'kodeMataKuliah' => 'IS184101',
                'kodeKelas' => 'SI1101',
                'namaMataKuliah' => 'Logika & Struktur Diskrit',
                'sks' => 2,
                'tahunKurikulum' => 2018,
                'semester' => 1
            ],
            [
                'kodeMataKuliah' => 'IS184203',
                'kodeKelas' => 'SI1102',
                'namaMataKuliah' => 'Algoritma & Pemrograman',
                'sks' => 3,
                'tahunKurikulum' => 2018,
                'semester' => 2
            ],
            [
                'kodeMataKuliah' => 'IS184204',
                'kodeKelas' => 'SI1201',
                'namaMataKuliah' => 'Organisasi dan Fungsional Bisnis',
                'sks' => 3,
                'tahunKurikulum' => 2018,
                'semester' => 2
            ],
            [
                'kodeMataKuliah' => 'IS184308',
                'kodeKelas' => 'SI1202',
                'namaMataKuliah' => 'Manajemen & Proses TI',
                'sks' => 3,
                'tahunKurikulum' => 2018,
                'semester' => 3
            ],
            [
                'kodeMataKuliah' => 'IS184310',
                'kodeKelas' => 'SI2101',
                'namaMataKuliah' => 'Manajemen Proses Bisnis',
                'sks' => 4,
                'tahunKurikulum' => 2018,
                'semester' => 3
            ],
            [
                'kodeMataKuliah' => 'IS184307',
                'kodeKelas' => 'SI2102',
                'namaMataKuliah' => 'Pemrograman Web',
                'sks' => 3,
                'tahunKurikulum' => 2018,
                'semester' => 3
            ],
            [
                'kodeMataKuliah' => 'IS184309',
                'kodeKelas' => 'SI2201',
                'namaMataKuliah' => 'Rekayasa Kebutuhan Perangkat Lunak',
                'sks' => 3,
                'tahunKurikulum' => 2018,
                'semester' => 3
            ],
            [
                'kodeMataKuliah' => 'IW184301',
                'kodeKelas' => 'SI2202',
                'namaMataKuliah' => 'Sistem Basis Data',
                'sks' => 4,
                'tahunKurikulum' => 2018,
                'semester' => 3
            ],
            [
                'kodeMataKuliah' => 'IS184305',
                'kodeKelas' => 'SI2202',
                'namaMataKuliah' => 'Statistika',
                'sks' => 3,
                'tahunKurikulum' => 2018,
                'semester' => 3
            ],
            [
                'kodeMataKuliah' => 'IS184411',
                'kodeKelas' => 'SI4102',
                'namaMataKuliah' => 'Desain & Manajemen Jaringan Komputer',
                'sks' => 4,
                'tahunKurikulum' => 2018,
                'semester' => 4
            ],
            [
                'kodeMataKuliah' => 'IS184621',
                'kodeKelas' => 'SI4102',
                'namaMataKuliah' => 'Manajemen Basis Data',
                'sks' => 3,
                'tahunKurikulum' => 2018,
                'semester' => 4
            ],
            [
                'kodeMataKuliah' => 'IS184412',
                'kodeKelas' => 'SI4101',
                'namaMataKuliah' => 'Rancang Bangun Perangkat Lunak',
                'sks' => 4,
                'tahunKurikulum' => 2018,
                'semester' => 4
            ],
            [
                'kodeMataKuliah' => 'IS184414',
                'kodeKelas' => 'SI4102',
                'namaMataKuliah' => 'Sistem Enterprise',
                'sks' => 4,
                'tahunKurikulum' => 2018,
                'semester' => 4
            ],
            [
                'kodeMataKuliah' => 'IS184413',
                'kodeKelas' => 'SI4102',
                'namaMataKuliah' => 'Manajemen Proyek TI',
                'sks' => 4,
                'tahunKurikulum' => 2018,
                'semester' => 4
            ],
            [
                'kodeMataKuliah' => 'IS184518',
                'kodeKelas' => 'SI4102',
                'namaMataKuliah' => 'Implementasi Perangkat Lunak',
                'sks' => 3,
                'tahunKurikulum' => 2018,
                'semester' => 5
            ],
            [
                'kodeMataKuliah' => 'IS184516',
                'kodeKelas' => 'SI4102',
                'namaMataKuliah' => 'Kecerdasan Bisnis',
                'sks' => 4,
                'tahunKurikulum' => 2018,
                'semester' => 5
            ],
            [
                'kodeMataKuliah' => 'IS184517',
                'kodeKelas' => 'SI4102',
                'namaMataKuliah' => 'Manajemen Layanan Teknologi Informasi',
                'sks' => 3,
                'tahunKurikulum' => 2018,
                'semester' => 5
            ],
            [
                'kodeMataKuliah' => 'IS184519',
                'kodeKelas' => 'SI4102',
                'namaMataKuliah' => 'Perencanaan Strategis TI',
                'sks' => 3,
                'tahunKurikulum' => 2018,
                'semester' => 5
            ],
            [
                'kodeMataKuliah' => 'IS184515',
                'kodeKelas' => 'SI4102',
                'namaMataKuliah' => 'Riset Operasi',
                'sks' => 3,
                'tahunKurikulum' => 2018,
                'semester' => 5
            ],
            [
                'kodeMataKuliah' => 'UG184915',
                'kodeKelas' => 'SI4102',
                'namaMataKuliah' => 'Teknopreneur',
                'sks' => 2,
                'tahunKurikulum' => 2018,
                'semester' => 5
            ],
            [
                'kodeMataKuliah' => 'IS184620',
                'kodeKelas' => 'SI4102',
                'namaMataKuliah' => 'Analitika Bisnis',
                'sks' => 4,
                'tahunKurikulum' => 2018,
                'semester' => 6
            ],
            [
                'kodeMataKuliah' => 'IS184622',
                'kodeKelas' => 'SI4102',
                'namaMataKuliah' => 'Desain Pengalaman Pengguna',
                'sks' => 3,
                'tahunKurikulum' => 2018,
                'semester' => 6
            ],
            [
                'kodeMataKuliah' => 'IS184624',
                'kodeKelas' => 'SI4102',
                'namaMataKuliah' => 'Manajemen Investasi TI',
                'sks' => 3,
                'tahunKurikulum' => 2018,
                'semester' => 6
            ],
            [
                'kodeMataKuliah' => 'IS184623',
                'kodeKelas' => 'SI4102',
                'namaMataKuliah' => 'Proteksi Aset Informasi',
                'sks' => 3,
                'tahunKurikulum' => 2018,
                'semester' => 6
            ],
            [
                'kodeMataKuliah' => 'IS184625',
                'kodeKelas' => 'SI4102',
                'namaMataKuliah' => 'Rintisan Bisnis Digital',
                'sks' => 3,
                'tahunKurikulum' => 2018,
                'semester' => 6
            ],
            [
                'kodeMataKuliah' => 'UG184916',
                'kodeKelas' => 'SI4102',
                'namaMataKuliah' => 'Wawasan dan Aplikasi Teknologi',
                'sks' => 3,
                'tahunKurikulum' => 2018,
                'semester' => 6
            ],
            [
                'kodeMataKuliah' => 'IS184948',
                'kodeKelas' => 'SI4107',
                'namaMataKuliah' => 'Bisnis Digital',
                'sks' => 3,
                'tahunKurikulum' => 2018,
                'semester' => 7
            ],
            [
                'kodeMataKuliah' => 'IS184728',
                'kodeKelas' => 'SI4107',
                'namaMataKuliah' => 'Etika Profesi TI ',
                'sks' => 2,
                'tahunKurikulum' => 2018,
                'semester' => 7
            ],
            [
                'kodeMataKuliah' => 'IS184727',
                'kodeKelas' => 'SI4107',
                'namaMataKuliah' => 'Evaluasi dan Audit TI',
                'sks' => 4,
                'tahunKurikulum' => 2018,
                'semester' => 7
            ],
            [
                'kodeMataKuliah' => 'IS184935',
                'kodeKelas' => 'SI4107',
                'namaMataKuliah' => 'Forensika Digital',
                'sks' => 3,
                'tahunKurikulum' => 2018,
                'semester' => 7
            ],
            [
                'kodeMataKuliah' => 'IS184934',
                'kodeKelas' => 'SI4107',
                'namaMataKuliah' => 'Internet untuk Segala',
                'sks' => 3,
                'tahunKurikulum' => 2018,
                'semester' => 7
            ],
            [
                'kodeMataKuliah' => 'IS184936',
                'kodeKelas' => 'SI4108',
                'namaMataKuliah' => 'Keamanan Siber',
                'sks' => 3,
                'tahunKurikulum' => 2018,
                'semester' => 7
            ],
            [
                'kodeMataKuliah' => 'IS184949',
                'kodeKelas' => 'SI4108',
                'namaMataKuliah' => 'Kreatif Digital',
                'sks' => 3,
                'tahunKurikulum' => 2018,
                'semester' => 7
            ],
            [
                'kodeMataKuliah' => 'IS184946',
                'kodeKelas' => 'SI4108',
                'namaMataKuliah' => 'Manajemen Hubungan Pelanggan ',
                'sks' => 3,
                'tahunKurikulum' => 2018,
                'semester' => 7
            ],
            [
                'kodeMataKuliah' => 'IS184940',
                'kodeKelas' => 'SI4108',
                'namaMataKuliah' => 'Manajemen Keberlangsungan Bisnis',
                'sks' => 3,
                'tahunKurikulum' => 2018,
                'semester' => 7
            ],
            [
                'kodeMataKuliah' => 'IS184951',
                'kodeKelas' => 'SI4108',
                'namaMataKuliah' => 'Manajemen Merek Digital',
                'sks' => 3,
                'tahunKurikulum' => 2018,
                'semester' => 7
            ],
            [
                'kodeMataKuliah' => 'IS184939',
                'kodeKelas' => 'SI4108',
                'namaMataKuliah' => 'Manajemen Perubahan Organisasi',
                'sks' => 3,
                'tahunKurikulum' => 2018,
                'semester' => 7
            ],
            [
                'kodeMataKuliah' => 'IS184945',
                'kodeKelas' => 'SI4108',
                'namaMataKuliah' => 'Manajemen Rantai Pasok',
                'sks' => 3,
                'tahunKurikulum' => 2018,
                'semester' => 7
            ],
            [
                'kodeMataKuliah' => 'IS184937',
                'kodeKelas' => 'SI4108',
                'namaMataKuliah' => 'Manajemen Risiko & Kualitas TI',
                'sks' => 3,
                'tahunKurikulum' => 2018,
                'semester' => 7
            ],
            [
                'kodeMataKuliah' => 'IS184944',
                'kodeKelas' => 'SI4108',
                'namaMataKuliah' => 'Optimasi Kombinatorik & Heuristik',
                'sks' => 3,
                'tahunKurikulum' => 2018,
                'semester' => 7
            ],
            [
                'kodeMataKuliah' => 'IS184950',
                'kodeKelas' => 'SI4108',
                'namaMataKuliah' => 'Pemasaran Digital',
                'sks' => 3,
                'tahunKurikulum' => 2018,
                'semester' => 7
            ],
            [
                'kodeMataKuliah' => 'IS184956',
                'kodeKelas' => 'SI4108',
                'namaMataKuliah' => 'Pengembangan dan Operasi Sistem',
                'sks' => 3,
                'tahunKurikulum' => 2018,
                'semester' => 7
            ],
            [
                'kodeMataKuliah' => 'IS184943',
                'kodeKelas' => 'SI4108',
                'namaMataKuliah' => 'Penggalian Data',
                'sks' => 3,
                'tahunKurikulum' => 2018,
                'semester' => 7
            ],
            [
                'kodeMataKuliah' => 'IS184931',
                'kodeKelas' => 'SI4108',
                'namaMataKuliah' => 'Pengolahan Bahasa Alami',
                'sks' => 3,
                'tahunKurikulum' => 2018,
                'semester' => 7
            ],
            [
                'kodeMataKuliah' => 'IS184938',
                'kodeKelas' => 'SI4108',
                'namaMataKuliah' => 'Tata Kelola TI',
                'sks' => 3,
                'tahunKurikulum' => 2018,
                'semester' => 7
            ],
            [
                'kodeMataKuliah' => 'IS184929',
                'kodeKelas' => 'SI4108',
                'namaMataKuliah' => 'Teknologi Basis Data',
                'sks' => 3,
                'tahunKurikulum' => 2018,
                'semester' => 7
            ],
            [
                'kodeMataKuliah' => 'IS184930',
                'kodeKelas' => 'SI4108',
                'namaMataKuliah' => 'Teknologi Web',
                'sks' => 3,
                'tahunKurikulum' => 2018,
                'semester' => 7
            ],

        ]);
    }
}
