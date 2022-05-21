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
            ]
        ]);
    }
}
