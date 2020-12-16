<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksiPengirimenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi_pengirimen', function (Blueprint $table) {
            $table->bigIncrements('id_transaksi');
            //$table->integer('id_agen');
            //$table->string('nama_agen');
            //$table->integer('id_driver');
            $table->string('nama_driver');
            $table->string('nama_pupuk');
            $table->string('jumlah_pengiriman');
            $table->string('alamat_pengiriman');
            $table->date('tanggal_pengiriman');
            $table->string('status_pengiriman')->default('Belum Dikirim');
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
        Schema::dropIfExists('transaksi_pengirimen');
    }
}
