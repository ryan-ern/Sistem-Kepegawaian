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
        Schema::create('keluarga_pasangans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('no_pasangan');
            $table->enum('status_pekerjaan', ['pns', 'bukan pns']);
            $table->string('nama');
            $table->date('tgl_lahir');
            $table->string('no_identitas');
            $table->string('jk');
            $table->string('alamat');
            $table->string('agama');
            $table->string('status_keluarga');
            $table->string('status_pernikahan');
            $table->string('no_akta');
            $table->string('akta_nikah');
            $table->date('tgl_nikah');
            $table->string('email');
            $table->string('no_cerai')->nullable();
            $table->string('akta_cerai')->nullable();
            $table->date('tgl_cerai')->nullable();
            $table->string('no_karis');
            $table->string('no_tel');
            $table->string('no_hp');
            $table->enum('status', ['diproses', 'diterima', 'ditolak'])->default('diproses');
            $table->timestamps();
        });

        Schema::create('keluarga_pasangan_files', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('keluarga_pasangan_id');
            $table->foreign('keluarga_pasangan_id')->references('id')->on('keluarga_pasangans')->onDelete('cascade');
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
        Schema::dropIfExists('keluarga_pasangans');
        Schema::dropIfExists('keluarga_pasangan_files');
    }
};
