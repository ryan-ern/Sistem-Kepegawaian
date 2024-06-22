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
        Schema::create('jabatans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('jenis_jabatan');
            $table->string('mutasi');
            $table->string('penugasan');
            $table->date('tgl_sk');
            $table->date('tgl_tmt');
            $table->date('tgl_tmt_pelantikan');
            $table->string('status_riwayat');
            $table->string('instansi');
            $table->string('sk');
            $table->string('sk_induk');
            $table->string('unit_organisasi');
            $table->string('nama_jabatan');
            $table->string('no_sk');
            $table->enum('status', ['diproses', 'diterima', 'ditolak'])->default('diproses');
            $table->timestamps();
        });

        Schema::create('jabatan_files', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('jabatan_id');
            $table->foreign('jabatan_id')->references('id')->on('jabatans')->onDelete('cascade');
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
        Schema::dropIfExists('jabatans');
        Schema::dropIfExists('jabatan_files');
    }
};
