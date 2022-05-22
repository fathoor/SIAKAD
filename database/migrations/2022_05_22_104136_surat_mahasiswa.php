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
        Schema::create('surat_mahasiswa', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('suratMahasiswaNRP');
            $table->string('tipeSurat');
            $table->string('kodeSurat');
            $table->date('tanggalAjuan');
            $table->string('status')->default('Disetujui');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('surat_mahasiswa');
    }
};
