<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            // User
            AkunSeeder::class,
            DosenSeeder::class,

            // Akademik
            HasilKuesionerSeeder::class,
            DaftarKuesionerSeeder::class,
            PeriodeSeeder::class,
            DaftarKelasSeeder::class,
            FRSSeeder::class,
            FRSStatusSeeder::class,
            WaliSeeder::class,

            //Kurikulum
            MataKuliahSeeder::class,

            // Finansial
            TagihanSeeder::class,

            // Layanan
            SuratAktifSeeder::class,
            SuratCutiSeeder::class,
            SuratUndurDiriSeeder::class,
        ]);
    }
}
