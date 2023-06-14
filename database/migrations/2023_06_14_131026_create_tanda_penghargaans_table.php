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
        Schema::create('tanda_penghargaans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('bukti_penghargaan');
            $table->string('tahun');
            $table->string('nama_penghargaan');
            $table->string('nama_lembaga_pemberi');
            $table->string('lokasi');
            $table->string('negara');
            $table->string('tingkat_penghargaan');
            $table->string('tingkatan_lembaga');
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
        Schema::dropIfExists('tanda_penghargaans');
    }
};
