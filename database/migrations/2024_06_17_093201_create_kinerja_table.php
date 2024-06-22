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
        Schema::create('kinerjas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('tahun');
            $table->string('nip');
            $table->string('nama');
            $table->string('unit_kerja');
            $table->date('tgl');
            $table->string('jabatan');
            $table->string('hasil');
            $table->string('instansi');
            $table->string('perilaku');
            $table->string('kuadran');
            $table->string('penilai_jabatan');
            $table->string('penilai');
            $table->enum('status', ['diproses', 'diterima', 'ditolak'])->default('diproses');
            $table->timestamps();
        });

        Schema::create('kinerja_files', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kinerja_id');
            $table->foreign('kinerja_id')->references('id')->on('kinerjas')->onDelete('cascade');
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
        Schema::dropIfExists('kinerjas');
        Schema::dropIfExists('kinerja_files');
    }
};
