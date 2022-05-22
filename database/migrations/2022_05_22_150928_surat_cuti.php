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
            $table->string('periodeCuti');
            $table->string('alasanCuti');
            $table->integer('jumlahSemesterCuti');
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
