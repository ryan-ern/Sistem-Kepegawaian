<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KeluargaAnak extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'no_anak', 'status_pekerjaan', 'nama', 'status_keluarga', 'agama', 'tgl_lahir', 'jk', 'no_identitas', 'email', 'status_nikah', 'tgl_meninggal', 'no_meninggal', 'no_lahir', 'no_tel', 'status'
    ];

    public function files()
    {
        return $this->hasMany(KeluargaAnakFile::class);
    }
}

class KeluargaAnakFile extends Model
{
    use HasFactory;

    protected $fillable = ['keluarga_anak_id', 'file_path', 'file_name'];

    public function keluarga()
    {
        return $this->belongsTo(KeluargaAnak::class);
    }
}
