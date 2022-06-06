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
        Schema::create('frs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('NRP');
            $table->string('kodeMK');
            $table->string('kelas');
            $table->bigInteger('dosenNRP');
            $table->integer('nilai');
            $table->string('periode');
            $table->boolean('matkulAtas')->default(false);
            $table->boolean('kuesioner')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('frs');
    }
};
