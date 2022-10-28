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
        Schema::create('detail_rentals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('rental_id')->constrained('rentals')->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('telp_rental');
            $table->string('alamat');
            $table->string('kota');
            $table->string('provinsi');
            $table->string('kode_pos');
            $table->string('ktp');
            $table->string('wajah_ktp');
            $table->string('koordinat');
            $table->string('foto_profil');
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
        Schema::dropIfExists('detail_rentals');
    }
};
