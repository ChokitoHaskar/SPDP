<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksiPermintaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi_permintaans', function (Blueprint $table) {
            $table->bigIncrements('id_transaksi');
            $table->integer('id_pengguna');
            $table->string('nama_pupuk');
            $table->string('jumlah_permintaan');
            $table->date('tanggal_transaksi');
            $table->string('status_verifikasi')->default('Belum Diverifikasi');
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
        Schema::dropIfExists('transaksi_permintaans');
    }
}
