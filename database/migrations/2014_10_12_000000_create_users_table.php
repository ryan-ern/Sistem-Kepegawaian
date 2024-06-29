<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;

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
            $table->string('nik')->nullable();
            $table->string('email')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->enum('role', ['admin', 'user'])->default('user');
            $table->string('password');
            $table->string('no_tel');
            $table->string('no_hp')->nullable();
            $table->string('satuan_kerja')->nullable();
            $table->string('alamat')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->date('tgl_lahir')->nullable();
            $table->string('agama')->nullable();
            $table->enum('jk_user', ['laki-laki', 'perempuan'])->default('laki-laki');
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
            $table->string('kuota_cuti')->default('12');
            $table->string('tahun_terakhir_perbarui')->nullable();
            $table->enum('status', ['aktif', 'tidak aktif'])->default('aktif');
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
