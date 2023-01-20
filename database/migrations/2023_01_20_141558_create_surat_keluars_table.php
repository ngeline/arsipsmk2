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
        Schema::create('surat_keluars', function (Blueprint $table) {
            $table->id();
            $table->string('kepada');
            $table->text('alamat');
            $table->string('nomor_surat');
            $table->date('tanggal_surat');
            $table->string('jumlah_lampiran');
            $table->string('file_surat');
            $table->string('perihal');
            $table->date('tanggal_input');
            $table->string('kode_simpan');
            $table->text('isi_ringkasan');
            $table->date('tanggal_rapat')->nullable();
            $table->time('waktu_rapat')->nullable();
            $table->text('lokasi')->nullable();
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
        Schema::dropIfExists('surat_keluars');
    }
};
