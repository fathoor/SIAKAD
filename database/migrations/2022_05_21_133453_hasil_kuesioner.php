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
        Schema::create('hasil_kuesioner', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('dosenNRP');
            $table->string('periode');
            $table->char('kodeMK', 8);
            $table->tinyInteger('jawaban1');
            $table->tinyInteger('jawaban2');
            $table->tinyInteger('jawaban3');
            $table->tinyInteger('jawaban4');
            $table->tinyInteger('jawaban5');
            $table->tinyInteger('jawaban6');
            $table->tinyInteger('jawaban7');
            $table->tinyInteger('jawaban8');
            $table->tinyInteger('jawaban9');
            $table->tinyInteger('jawaban10');
            $table->tinyInteger('jawaban11');
            $table->tinyInteger('jawaban12');
            $table->longText('komentar');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hasil_kuesioner');
    }
};
