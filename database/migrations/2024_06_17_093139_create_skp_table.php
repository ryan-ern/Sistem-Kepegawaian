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
        Schema::create('skps', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('tahun');
            $table->string('nilai');
            $table->string('ot');
            $table->string('integritas');
            $table->string('komitmen');
            $table->string('disiplin');
            $table->string('kerja_sama');
            $table->string('status_penilai');
            $table->string('status_atasan');
            $table->string('kepemimpinan');
            $table->string('jumlah');
            $table->string('perilaku');
            $table->string('prestasi');
            $table->string('atasan_nonpns');
            $table->string('atasan_jabatan');
            $table->string('penilai_jabatan');
            $table->string('golongan_penilai_tmt');
            $table->string('golongan_atasan_tmt');
            $table->string('golongan_penilai');
            $table->string('golongan_atasan');
            $table->string('nama_penilai');
            $table->string('nama_atasan');
            $table->string('nip_penilai');
            $table->string('nip_atasan');
            $table->string('jenis_jabatan');
            $table->enum('status', ['diproses', 'diterima', 'ditolak'])->default('diproses');
            $table->timestamps();
        });

        Schema::create('skp_files', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('skp_id');
            $table->foreign('skp_id')->references('id')->on('skps')->onDelete('cascade');
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
        Schema::dropIfExists('skps');
        Schema::dropIfExists('skp_files');
    }
};