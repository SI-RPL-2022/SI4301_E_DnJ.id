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
        Schema::create('pelatihans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pelatihan');
            $table->date('tanggal_start');
            $table->date('tanggal_end');
            $table->date('batas_daftar');
            $table->string('tipe');
            $table->string('penyelenggara');
            $table->string('deskripsi');
            $table->string('alamat')->nullable();
            $table->string('link')->nullable();
            $table->BigInteger('contact');
            $table->string('link_daftar');
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
        Schema::dropIfExists('pelatihans');
    }
};
