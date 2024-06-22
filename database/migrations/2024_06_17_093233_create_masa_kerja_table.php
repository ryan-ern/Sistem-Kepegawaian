<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('masa_kerjas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('masa_kerja');
            $table->string('instansi');
            $table->date('tgl_awal');
            $table->date('tgl_akhir');
            $table->string('no_sk');
            $table->date('tgl_sk');
            $table->string('no_bkn');
            $table->date('tgl_bkn');
            $table->string('masa_kerja_tahun');
            $table->string('masa_kerja_bulan');
            $table->enum('status', ['diproses', 'diterima', 'ditolak'])->default('diproses');
            $table->timestamps();
        });

        Schema::create('masa_kerja_files', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('masa_kerja_id');
            $table->foreign('masa_kerja_id')->references('id')->on('masa_kerjas')->onDelete('cascade');
            $table->string('file_path');
            $table->string('file_name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('masa_kerjas');
        Schema::dropIfExists('masa_kerja_files');
    }
};
