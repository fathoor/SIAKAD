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
            $table->bigInteger('NIP')->unique();
            $table->char('kodeMK', 8);
            $table->tinyInteger('jawaban1');
            $table->tinyInteger('jawaban2');
            $table->tinyInteger('jawaban3');
            $table->longText('feedback');
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
