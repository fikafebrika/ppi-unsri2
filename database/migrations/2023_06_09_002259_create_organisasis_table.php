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
        Schema::create('organisasis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('bukti_organisasi');
            $table->string('nama_organisasi');
            $table->string('jenis_organisasi');
            $table->string('kota');
            $table->string('negara');
            $table->string('periode');
            $table->string('lama_anggota');
            $table->string('jabatan');
            $table->string('tingkatan_organisasi');
            $table->string('lingkup_organisasi');
            $table->string('aktifitas');
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
        Schema::dropIfExists('organisasis');
    }
};
