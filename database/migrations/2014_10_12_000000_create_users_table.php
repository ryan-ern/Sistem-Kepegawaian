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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('jabatan');
            $table->string('nip');
            $table->string('nik');
            $table->string('email');
            $table->timestamp('email_verified_at')->nullable();
            $table->enum('role', ['admin', 'user']);
            $table->string('password');
            $table->string('no_tel');
            $table->string('no_hp');
            $table->string('satuan_kerja');
            $table->string('alamat');
            $table->string('tempat_lahir');
            $table->date('tgl_lahir');
            $table->string('agama');
            $table->enum('jk_user', ['laki-laki', 'perempuan']);
            $table->string('foto')->nullable();
            $table->string('lokasi_kerja')->nullable();
            $table->string('no_npwp')->nullable();
            $table->date('tgl_npwp')->nullable();
            $table->string('no_bpjs')->nullable();
            $table->string('no_taspen')->nullable();
            $table->date('tgl_taspen')->nullable();
            $table->string('no_tapera')->nullable();
            $table->string('kelas_jabatan')->nullable();
            $table->string('no_karis')->nullable();
            $table->string('kppn')->nullable();
            $table->string('no_akta')->nullable();
            $table->string('no_kk')->nullable();
            $table->enum('status', ['aktik', 'tidak aktif'])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};