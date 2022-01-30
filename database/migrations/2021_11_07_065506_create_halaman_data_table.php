<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHalamanDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('halaman_data', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tematik_id')->constrained();
            $table->string('alamat');
            $table->string('rumah_sakit');
            $table->integer('jumlah_poliklinik');
            $table->integer('jumlah_kamar');
            $table->integer('dokter_umum');
            $table->integer('dokter_spesialis');
            $table->integer('perawat');
            $table->string('long');
            $table->string('lat');
            $table->string('gambar');
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
        Schema::dropIfExists('halaman_data');
    }
}
