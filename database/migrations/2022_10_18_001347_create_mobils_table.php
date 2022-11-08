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
        Schema::create('mobils', function (Blueprint $table) {
            $table->id();
            $table->foreignId('rental_id')->constrained('rentals')->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('foto_mobil')->nullable();
            $table->string('merek');
            $table->string('plat');
            $table->string('warna');
            $table->string('tipe');
            $table->string('transmisi');
            $table->year('tahun');
            $table->string('unit');
            $table->string('history_penyewaan');
            $table->string('harga_sewa');
            $table->string('status_unit');
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
        Schema::dropIfExists('mobils');
    }
};
