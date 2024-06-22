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
        Schema::create('golongans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('golongan');
            $table->string('jenis_kp');
            $table->string('masa_kerja_tahun');
            $table->string('masa_kerja_bulan');
            $table->date('tmt');
            $table->string('no_sk');
            $table->date('tgl_sk');
            $table->string('no_bkn')->nullable();
            $table->date('tgl_bkn')->nullable();
            $table->enum('status', ['diproses', 'diterima', 'ditolak'])->default('diproses');
            $table->timestamps();
        });

        Schema::create('golongan_files', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('golongan_id');
            $table->foreign('golongan_id')->references('id')->on('golongans')->onDelete('cascade');
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
        Schema::dropIfExists('golongans');
        Schema::dropIfExists('golongan_files');
    }
};
