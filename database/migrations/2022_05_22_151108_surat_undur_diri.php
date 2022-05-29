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
        Schema::create('surat_undur_diri', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('suratUndurDiriNRP');
            $table->string('type');
            $table->string('periodeMundur');
            $table->date('tanggalAjuan');
            $table->string('alasanMundur');
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
        Schema::dropIfExists('surat_undur_diri');
    }
};
