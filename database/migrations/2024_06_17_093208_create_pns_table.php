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
        Schema::create('pns', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('status_pns');
            $table->string('no_sk_cpns');
            $table->string('no_sk_pns');
            $table->string('no_sk_sttpl');
            $table->string('karpeg');
            $table->date('tgl_sttpl');
            $table->string('no_surat_dokter');
            $table->string('no_spmt');
            $table->string('no_c2th');
            $table->date('tgl_sk_cpns');
            $table->date('tgl_sk_pns');
            $table->date('tgl_tmt_cpns');
            $table->date('tgl_tmt_pns');
            $table->date('tgl_tmt_dokter');
            $table->date('tgl_spmt');
            $table->date('tgl_c2th');
            $table->enum('status', ['diproses', 'diterima', 'ditolak'])->default('diproses');
            $table->timestamps();
        });

        Schema::create('pns_files', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pns_id');
            $table->foreign('pns_id')->references('id')->on('pns')->onDelete('cascade');
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
        Schema::dropIfExists('pns');
        Schema::dropIfExists('pns_files');
    }
};