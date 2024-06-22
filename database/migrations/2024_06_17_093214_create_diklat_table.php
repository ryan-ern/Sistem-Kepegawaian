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
        Schema::create('diklats', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('jenis_diklat');
            $table->string('nama_diklat');
            $table->string('institusi');
            $table->date('tgl_selesai');
            $table->string('durasi');
            $table->string('rumpun');
            $table->date('tgl_mulai');
            $table->string('no_sertif');
            $table->string('tahun');
            $table->enum('status', ['diproses', 'diterima', 'ditolak'])->default('diproses');
            $table->timestamps();
        });

        Schema::create('diklat_files', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('diklat_id');
            $table->foreign('diklat_id')->references('id')->on('diklats')->onDelete('cascade');
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
        Schema::dropIfExists('diklats');
        Schema::dropIfExists('diklat_files');
    }
};