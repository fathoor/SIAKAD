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
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->id();
            $table->string('namaMahasiswa');
            $table->string('NRP')->unique();
            $table->string('password');
            $table->string('NIK');
            $table->string('tempatLahir');
            $table->date('tanggalLahir');
            $table->string('nomorTelp');
            $table->string('email');
            $table->integer('tahunMasuk');
            $table->string('alamat');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mahasiswa');
    }
};
