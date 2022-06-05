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
        Schema::create(('daftar_kelas'), function (Blueprint $table) {
            $table->id();
            $table->char('kodeKelas', 6);
            $table->integer('kapasitas');
            $table->char('kodeMK', 8);
            $table->char('kelas', 1);
            $table->integer('dosenNRP');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('daftar_kelas');
    }
};
