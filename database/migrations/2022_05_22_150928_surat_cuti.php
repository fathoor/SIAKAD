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
        Schema::create('surat_cuti', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('suratCutiNRP');
            $table->string('type');
            $table->string('periodeCuti');
            $table->integer('jumlahSemesterCuti');
            $table->date('tanggalAjuan');
            $table->string('alasanCuti');
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
        Schema::dropIfExists('surat_cuti');
    }
};
