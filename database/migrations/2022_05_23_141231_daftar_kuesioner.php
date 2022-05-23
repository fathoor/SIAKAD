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
        Schema::create(('daftar_kuesioner'), function (Blueprint $table){
            $table->id();
            $table->char('kodeKuesioner', 5);
            $table->bigInteger('NRP');
            $table->string('kodeMK');
            $table->bigInteger('dosenNRP');
            $table->boolean('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('daftar_kuesioner');
    }
};
