<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
            php artisan make:seeder NamaSeeder

            DB::table('Nama Tabel')->insert([
                [
                'NRP' => NRP,
                'nama' => 'Nama Lengkap',
                'password' => Hash::make('password'),
                'NIK' => NIK,
                'tempatLahir' => '...',
                'tanggalLahir' => 'YYYY-MM-DD',
                'nomorTelp' => Nomor tanpa 0,
                'email' => '...',
                'tahunMasuk' => YYYY,
                'alamat' => '...'
                ]
            ]);
        */
        DB::table('akun')->insert([
            // Default User
            [
                'NRP' => 5026201000,
                'nama' => 'Mahasiswa',
                'password' => Hash::make('password'),
                'NIK' => 3578000101000000,
                'tempatLahir' => 'Jakarta',
                'tanggalLahir' => '2000-01-01',
                'nomorTelp' => 81000000000,
                'email' => 'mahasiswa@gmail.com',
                'tahunMasuk' => 2020,
                'alamat' => 'Kampus ITS'
            ],
            [
                'NRP' => 5026201139,
                'nama' => 'Muhammad Fathurrahman',
                'password' => Hash::make('admin'),
                'NIK' => 3578160404020006,
                'tempatLahir' => 'Surabaya',
                'tanggalLahir' => '2002-04-04',
                'nomorTelp' => 81231977440,
                'email' => 'mfathoor@gmail.com',
                'tahunMasuk' => 2020,
                'alamat' => 'Jl Kebonsari Elveka VII No 7'
            ],
            [
                'NRP' => 5026201130,
                'nama' => 'Ellion Blessan',
                'password' => Hash::make('admin'),
                'NIK' => 3578021811020007,
                'tempatLahir' => 'Nganjuk',
                'tanggalLahir' => '2002-11-18',
                'nomorTelp' => 82306071010,
                'email' => 'ellionblessan@gmail.com',
                'tahunMasuk' => 2020,
                'alamat' => 'Sidosermo 2'
            ],
            [
                'NRP' => 5026201141,
                'nama' => 'Abraham Mauritz Talakua',
                'password' => Hash::make('admin'),
                'NIK' => 3578042603020010,
                'tempatLahir' => 'Surabaya',
                'tanggalLahir' => '2002-03-02',
                'nomorTelp' => 81232557720,
                'email' => 'abraham.mauritz2603@gmail.com',
                'tahunMasuk' => 2020,
                'alamat' => 'Baruk Barat 2'
            ],
            [
                'NRP' => 5026201054,
                'nama' => 'Ernando Taufiq Nur Hidayat',
                'password' => Hash::make('admin'),
                'NIK' => 3515162909030002,
                'tempatLahir' => 'Sidoarjo',
                'tanggalLahir' => '2003-09-03',
                'nomorTelp' => 81339524992,
                'email' => 'ernando.taufiq29@gmail.com',
                'tahunMasuk' => 2020,
                'alamat' => 'Jl. Pahlawan No.37'
            ],
            [
                'NRP' => 5026201045,
                'nama' => 'Theodorus Revonsio Prananta',
                'password' => Hash::make('admin'),
                'NIK' => 3515181209020003,
                'tempatLahir' => 'Sidoarjo',
                'tanggalLahir' => '2002-09-12',
                'nomorTelp' => 81230215394,
                'email' => 'revonsio12@gmail.com',
                'tahunMasuk' => 2020,
                'alamat' => 'Graha Tirta - Dahlia Nomor 82'
            ],
            [
                'NRP' => 5026201115,
                'nama' => 'Benediktus Pandu Budhiwicaksono',
                'password' => Hash::make('admin'),
                'NIK' => 3273070306020002,
                'tempatLahir' => 'Bandung',
                'tanggalLahir' => '2002-06-03',
                'nomorTelp' => 87712356300,
                'email' => 'beneedictpandu@gmail.com',
                'tahunMasuk' => 2020,
                'alamat' => 'Hidrodinamika III T87'
                ]
        ]);
    }
}
