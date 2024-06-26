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

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
