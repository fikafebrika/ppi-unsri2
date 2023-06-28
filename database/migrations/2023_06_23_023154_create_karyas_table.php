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
        Schema::create('karyas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('bukti_karya_tulis');
            $table->string('bulan_tahun');
            $table->string('judul_karya_tulis');
            $table->string('nama_media');
            $table->string('lokasi');
            $table->string('tingkatan_media');
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
        Schema::dropIfExists('karyas');
    }
};
