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
        Schema::create('pembayaran_donasi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_donasi');
            $table->foreignId('id_donatur');
            $table->bigInteger('nominal');
            $table->string('metode_pembayaran');
            $table->string('bukti_pembayaran')->nullable();
            $table->timestamp('tanggal_pembayaran')->nullable();
            $table->string('status');
            $table->timestamps();
            
            $table->foreign('id_donasi')->references('id')->on('donations');
            $table->foreign('id_donatur')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pembayaran_donasi');
    }
};
