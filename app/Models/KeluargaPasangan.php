<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KeluargaPasangan extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'no_pasangan', 'status_pekerjaan', 'nama', 'tgl_lahir', 'no_identitas', 'jk', 'alamat', 'agama', 'status_keluarga', 'status_pernikahan', 'no_akta', 'akta_nikah', 'tgl_nikah', 'email', 'no_cerai', 'akta_cerai', 'tgl_cerai', 'no_karis', 'no_tel', 'no_hp', 'status'
    ];

    public function files()
    {
        return $this->hasMany(KeluargaPasanganFile::class);
    }
}

class KeluargaPasanganFile extends Model
{
    use HasFactory;

    protected $fillable = ['keluarga_pasangan_id', 'file_path', 'file_name'];

    public function keluarga()
    {
        return $this->belongsTo(KeluargaPasangan::class);
    }
}
