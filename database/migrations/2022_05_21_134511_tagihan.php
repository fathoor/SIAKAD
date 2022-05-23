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
        Schema::create('tagihan', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('NRP');
            $table->string('periodeTagihan');
            $table->boolean('status');
            $table->char('bank', 5);
            $table->date('tanggal');
            $table->bigInteger('SPP');
            $table->bigInteger('pelayaran');
            $table->bigInteger('tunggakPelayaran');
            $table->bigInteger('SPI');
            $table->bigInteger('IPITS');
            $table->bigInteger('penyegaran');
            $table->bigInteger('tunggakSPP');
            $table->bigInteger('tunggakSPI');
            $table->bigInteger('tunggakIPITS');
            $table->bigInteger('tunggakPenyegaran');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tagihan');
    }
};
