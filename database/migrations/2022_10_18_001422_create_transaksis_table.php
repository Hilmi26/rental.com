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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('mobil_id')->constrained('mobils')->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('nama_rental');
            $table->time('jam_ambil');
            $table->time('jam_kembali');
            $table->date('tgl_ambil');
            $table->date('tgl_kembali');
            $table->string('total_harga');
            $table->string('total_denda');
            $table->string('status_pengembalian');
            $table->string('status_pemesanan');
            $table->string('status_pembayaran');
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
        Schema::dropIfExists('transaksis');
    }
};
