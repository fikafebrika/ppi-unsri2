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
        Schema::create('makalahs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('bukti_makalah');
            $table->string('bulan_tahun');
            $table->string('judul_makalah');
            $table->string('nama_makalah');
            $table->string('penyelenggara');
            $table->string('lokasi');
            $table->string('tingkatan_makalah');
            $table->string('tingkat_kesulitan');
            $table->text('uraian');
            $table->string('status_validasi')->default('pending');
            $table->text('catatan_verifikator')->nullable();
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
        Schema::dropIfExists('makalahs');
    }
};
