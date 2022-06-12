<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            // Default User Mahasiswa
            [
                'NRP' => 5026201000,
                'nama' => 'Mahasiswa',
                'password' => Hash::make('admin'),
                'NIK' => 3578010101010001,
                'tempatLahir' => 'Surabaya',
                'tanggalLahir' => '2001-01-01',
                'nomorTelp' => 84181285066,
                'email' => 'mahasiswa@mhs.its.ac.id',
                'departemen' => 'Sistem Informasi',
                'tahunMasuk' => 2020,
                'alamat' => 'Kampus ITS',
                'type' => 0
            ],
            // Mahasiswa
            [
                'NRP' => 5026201139,
                'nama' => 'Muhammad Fathurrahman',
                'password' => Hash::make('admin'),
                'NIK' => 3578160404020006,
                'tempatLahir' => 'Surabaya',
                'tanggalLahir' => '2002-04-04',
                'nomorTelp' => 81231977440,
                'email' => 'mfathoor.23@gmail.com',
                'departemen' => 'Sistem Informasi',
                'tahunMasuk' => 2020,
                'alamat' => 'Kebonsari Elveka VII No 7',
                'type' => 0
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
                'departemen' => 'Sistem Informasi',
                'tahunMasuk' => 2020,
                'alamat' => 'Sidosermo 2',
                'type' => 0
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
                'departemen' => 'Sistem Informasi',
                'tahunMasuk' => 2020,
                'alamat' => 'Baruk Barat 2',
                'type' => 0
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
                'departemen' => 'Sistem Informasi',
                'tahunMasuk' => 2020,
                'alamat' => 'Jl. Pahlawan No.37',
                'type' => 0
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
                'departemen' => 'Sistem Informasi',
                'tahunMasuk' => 2020,
                'alamat' => 'Graha Tirta - Dahlia Nomor 82',
                'type' => 0
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
                'departemen' => 'Sistem Informasi',
                'tahunMasuk' => 2020,
                'alamat' => 'Hidrodinamika III T87',
                'type' => 0
            ],
            [
                'NRP' => 5026201096,
                'nama' => 'Bonaventura Daiva Putra',
                'password' => Hash::make('admin'),
                'NIK' => 3515161504020002,
                'tempatLahir' => 'Surabaya',
                'tanggalLahir' => '2002-04-15',
                'nomorTelp' => 81216214615,
                'email' => '205026.bonaventura@mhs.its.ac.id',
                'departemen' => 'Sistem Informasi',
                'tahunMasuk' => 2020,
                'alamat' => 'Puri Surya Jaya i3 no.12',
                'type' => 0
            ],
            [
                'NRP' => 5026201109,
                'nama' => 'Alana Nabihah Thufailah',
                'password' => Hash::make('admin'),
                'NIK' => 3275105608010011,
                'tempatLahir' => 'Jakarta',
                'tanggalLahir' => '2001-08-16',
                'nomorTelp' => 81317090159,
                'email' => 'alanathufailah.205026@mhs.its.ac.id',
                'departemen' => 'Sistem Informasi',
                'tahunMasuk' => 2020,
                'alamat' => 'Citra Grand 01 no. 011',
                'type' => 0
            ],
            [
                'NRP' => 5026201007,
                'nama' => 'Faraz Nurdini',
                'password' => Hash::make('admin'),
                'NIK' => 6474025705020006,
                'tempatLahir' => 'Bontang',
                'tanggalLahir' => '2002-05-17',
                'nomorTelp' => 82299795389,
                'email' => 'faraz.205026@mhs.its.ac.id',
                'departemen' => 'Sistem Informasi',
                'tahunMasuk' => 2020,
                'alamat' => 'Jln Gunung Krakatau no 18, HOP 2',
                'type' => 0
            ],
            [
                'NRP' => 5026201068,
                'nama' => 'Cecilia Melva Natania',
                'password' => Hash::make('admin'),
                'NIK' => 6474056705020005,
                'tempatLahir' => 'Jakarta',
                'tanggalLahir' => '2002-05-17',
                'nomorTelp' => 81268210762,
                'email' => 'melva.205026@mhs.its.ac.id',
                'departemen' => 'Sistem Informasi',
                'tahunMasuk' => 2020,
                'alamat' => 'Kampus ITS',
                'type' => 0
            ],
            [
                'NRP' => 5026201091,
                'nama' => 'Aliyya Zahra Nurulhusna',
                'password' => Hash::make('admin'),
                'NIK' => 6474056705020004,
                'tempatLahir' => 'Jakarta',
                'tanggalLahir' => '2002-05-17',
                'nomorTelp' => 8129901405,
                'email' => 'aliyya.205026@mhs.its.ac.id',
                'departemen' => 'Sistem Informasi',
                'tahunMasuk' => 2020,
                'alamat' => 'Kampus ITS',
                'type' => 0
            ],
            // Dosen
            [
                'NRP' => 5026201,
                'nama' => 'Radityo Prasetianto Wibowo',
                'password' => Hash::make('dosen'),
                'NIK' => 3578010302840003,
                'tempatLahir' => 'Surabaya',
                'tanggalLahir' => '1984-02-03',
                'nomorTelp' => 8132579361,
                'email' => 'radityo_pw@is.its.ac.id',
                'departemen' => 'Sistem Informasi',
                'tahunMasuk' => null,
                'alamat' => 'Kampus ITS',
                'type' => 1
            ],
            [
                'NRP' => 5026202,
                'nama' => 'Renny Pradina',
                'password' => Hash::make('dosen'),
                'NIK' => null,
                'tempatLahir' => null,
                'tanggalLahir' => null,
                'nomorTelp' => null,
                'email' => 'renny@is.its.ac.id',
                'departemen' => 'Sistem Informasi',
                'tahunMasuk' => null,
                'alamat' => null,
                'type' => 1
            ],
            [
                'NRP' => 5026203,
                'nama' => 'Faizal Johan Atletiko',
                'password' => Hash::make('dosen'),
                'NIK' => null,
                'tempatLahir' => null,
                'tanggalLahir' => null,
                'nomorTelp' => null,
                'email' => 'faisal@is.its.ac.id',
                'departemen' => 'Sistem Informasi',
                'tahunMasuk' => null,
                'alamat' => null,
                'type' => 1
            ],
            // Default User Staff
            [
                'NRP' => 5026,
                'nama' => 'Staff',
                'password' => Hash::make('admin'),
                'NIK' => 3578011001850001,
                'tempatLahir' => 'Surabaya',
                'tanggalLahir' => '1985-01-10',
                'nomorTelp' => 8132361579,
                'email' => 'staff@its.ac.id',
                'departemen' => 'Institut Teknologi Sepuluh Nopember',
                'tahunMasuk' => null,
                'alamat' => 'Kampus ITS',
                'type' => 2
            ],
        ]);
    }
}
