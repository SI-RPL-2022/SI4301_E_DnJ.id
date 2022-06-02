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
        Schema::create('pekerjaans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pekerjaan');
            $table->date('tanggal_start');
            $table->string('perusahaan_perekrut');
            $table->string('deskripsi');
            $table->string('tipe');
            $table->string('kualifikasi')->nullable();
            $table->string('alamat_perusahaan')->nullable();
            $table->integer('contact');
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
        Schema::dropIfExists('pekerjaans');
    }
};
