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
        Schema::create('donations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_penggalang');
            $table->string('nama_donasi');
            $table->string('penerima_donasi');
            $table->string('deskripsi');
            $table->string('lokasi');
            $table->string('buka');
            $table->string('tutup');
            $table->string('target_donasi');
            $table->string('foto');
            $table->Biginteger('total_donasi');
            $table->integer('jumlah_donatur');
            $table->string('status');
            $table->timestamps();

            $table->foreign('id_penggalang')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donations');
    }
};
