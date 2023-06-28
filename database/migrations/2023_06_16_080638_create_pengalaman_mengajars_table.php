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
        Schema::create('pengalaman_mengajars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('bukti_pengalaman_mengajar');
            $table->string('nama_perguruan_tinggi');
            $table->string('nama_mata_ajaran');
            $table->string('lokasi');
            $table->string('periode');
            $table->string('jabatan');
            $table->string('sks');
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
        Schema::dropIfExists('pengalaman_mengajars');
    }
};
