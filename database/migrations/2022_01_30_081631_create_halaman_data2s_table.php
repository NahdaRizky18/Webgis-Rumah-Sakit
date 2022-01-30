<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHalamanData2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('halaman_data2s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tematik_id')->constrained();
            $table->string('rumahsakit');
            $table->string('nama_dokter');
            $table->string('spesialis2');
            $table->string('poli');
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
        Schema::dropIfExists('halaman_data2s');
    }
}
