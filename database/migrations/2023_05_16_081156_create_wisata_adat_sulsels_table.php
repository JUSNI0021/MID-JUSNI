<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatewisataadatsulselsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wisata_adat_sulsels', function (Blueprint $table) {
            $table->uuid('id')->prymary();
            $table->string('nama_tempat_wisata');
            $table->string('penjelasan_singkat');
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
        Schema::dropIfExists('wisata_adat_sulsels');
    }
};
