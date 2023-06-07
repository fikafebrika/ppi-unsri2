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
        Schema::create('pendidikan_formals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('bukti');
            $table->string('jenjang');
            $table->string('nama_perguruan_tinggi');
            $table->string('fakultas');
            $table->string('jurusan');
            $table->string('kota');
            $table->string('negara');
            $table->string('tahun_lulus');
            $table->string('gelar');
            $table->string('judul');
            $table->string('uraian_singkat');
            $table->float('nilai_akademik');
            $table->date('judicium');
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
        Schema::dropIfExists('pendidikan_formals');
    }
};
