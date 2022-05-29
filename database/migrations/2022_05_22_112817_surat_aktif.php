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
        Schema::create('surat_aktif', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('suratAktifNRP');
            $table->string('type');
            $table->string('periodeAktif');
            $table->date('tanggalAjuan');
            $table->string('keperluanSurat');
            $table->boolean('status')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('surat_aktif');
    }
};
