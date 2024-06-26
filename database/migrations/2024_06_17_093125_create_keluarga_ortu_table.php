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
        Schema::create('keluarga_ortus', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->enum('status_keluarga', ['hidup', 'meninggal']);
            $table->enum('status_pekerjaan', ['pns', 'bukan pns']);
            $table->string('nama');
            $table->string('status_pernikahan');
            $table->date('tgl_lahir');
            $table->string('jk');
            $table->string('no_identitas');
            $table->string('email');
            $table->date('tgl_meninggal')->nullable();
            $table->string('no_tel');
            $table->string('no_hp');
            $table->string('agama');
            $table->enum('status', ['diproses', 'diterima', 'ditolak'])->default('diproses');
            $table->timestamps();
        });

        Schema::create('keluarga_ortu_files', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('keluarga_ortu_id');
            $table->foreign('keluarga_ortu_id')->references('id')->on('keluarga_ortus')->onDelete('cascade');
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
        Schema::dropIfExists('keluarga_ortus');
        Schema::dropIfExists('keluarga_ortu_files');
    }
};
