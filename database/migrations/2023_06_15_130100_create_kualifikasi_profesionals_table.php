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
        Schema::create('kualifikasi_profesionals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('bukti_kualifikasi_profesional');
            $table->string('periode');
            $table->string('nama_instansi');
            $table->string('jabatan');
            $table->string('nama_aktifitas');
            $table->string('pemberi_tugas');
            $table->string('lokasi');
            $table->string('durasi');
            $table->string('posisi');
            $table->double('nilai_proyek');
            $table->string('nilai_tanggung_jawab');
            $table->string('sdm_terlibat');
            $table->string('tingkat_kesulitan');
            $table->string('skala_proyek');
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
        Schema::dropIfExists('kualifikasi_profesionals');
    }
};
