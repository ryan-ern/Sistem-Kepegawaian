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
        Schema::create('keluarga_anaks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('no_anak');
            $table->enum('status_pekerjaan', ['pns', 'bukan pns']);
            $table->string('nama');
            $table->string('status_keluarga');
            $table->string('agama');
            $table->date('tgl_lahir');
            $table->string('jk');
            $table->string('no_identitas');
            $table->string('email');
            $table->string('status_nikah');
            $table->date('tgl_meninggal')->nullable();
            $table->string('no_meninggal')->nullable();
            $table->string('no_lahir');
            $table->string('no_tel');
            $table->enum('status', ['diproses', 'diterima', 'ditolak'])->default('diproses');
            $table->timestamps();
        });

        Schema::create('keluarga_anak_files', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('keluarga_anak_id');
            $table->foreign('keluarga_anak_id')->references('id')->on('keluarga_anaks')->onDelete('cascade');
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
        Schema::dropIfExists('keluarga_anaks');
        Schema::dropIfExists('keluarga_anak_files');
    }
};
