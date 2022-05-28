<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
            php artisan make:migration namaTabel

            Schema::create('Nama Tabel', function (Blueprint $table) {
                $table->id(); -- Wajib Ada
                $table->{Tipe Data}('Nama Kolom');

                ->unique() kalau perlu
            });
        */
        Schema::create('akun', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('NRP')->unique();
            $table->string('nama');
            $table->string('password');
            $table->bigInteger('NIK')->nullable();
            $table->string('tempatLahir')->nullable();
            $table->date('tanggalLahir')->nullable();
            $table->bigInteger('nomorTelp')->nullable();
            $table->string('email');
            $table->string('departemen')->nullable();
            $table->integer('tahunMasuk')->nullable();
            $table->string('alamat')->nullable();
            $table->integer('type')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        /*
            Schema::dropIfExists('Nama Tabel');
        */
        Schema::dropIfExists('akun');
    }
};
