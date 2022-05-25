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
        Schema::create(('periode'), function (Blueprint $table) {
            $table->id();
            $table->char('periode', 5);
            $table->date('tglAwal');
            $table->date('tglAkhir');
            $table->date('awalPengisian');
            $table->date('akhirPengisian');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('periode');
    }
};
