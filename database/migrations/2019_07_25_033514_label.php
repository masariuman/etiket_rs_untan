<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Label extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('labels', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('mr');
            $table->string('nama');
            $table->string('obat');
            $table->string('indikasi');
            $table->string('aturan_pakai');
            $table->string('aturan_pakai2');
            $table->string('aturan_pakai3');
            $table->string('sebelum_sesudah');
            $table->integer('jumlah');
            $table->string('bentukobat');
            $table->integer('nomor_urut_input');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('labels');
    }
}
