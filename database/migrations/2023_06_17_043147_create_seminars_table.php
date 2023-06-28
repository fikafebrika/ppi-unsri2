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
        Schema::create('seminars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('bukti_seminar');
            $table->string('bulan_tahun');
            $table->string('nama_seminar');
            $table->string('nama_penyelenggara');
            $table->string('lokasi');
            $table->string('tingkatan_seminar');
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
        Schema::dropIfExists('seminars');
    }
};
