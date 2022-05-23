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
        Schema::create('transkrip', function (Blueprint $table) {
            $table->id();
            $table->float('IPS1');
            $table->float('IPS2');
            $table->float('IPS3');
            $table->float('IPS4');
            $table->float('IPS5');
            $table->float('IPS6');
            $table->float('IPS7');
            $table->float('IPS8');
            $table->float('IPK');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transkrip');
    }
};
