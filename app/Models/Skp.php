<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skp extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'tahun', 'nilai', 'ot', 'integritas', 'komitmen', 'disiplin', 'kerja_sama', 'status_penilai', 'status_atasan', 'kepemimpinan', 'jumlah', 'perilaku', 'prestasi', 'atasan_nonpns', 'atasan_jabatan', 'penilai_jabatan', 'golongan_penilai_tmt', 'golongan_atasan_tmt', 'golongan_penilai', 'golongan_atasan', 'nama_penilai', 'nama_atasan', 'nip_penilai', 'nip_atasan', 'jenis_jabatan', 'status',
    ];

    public function files()
    {
        return $this->hasMany(SkpFile::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
