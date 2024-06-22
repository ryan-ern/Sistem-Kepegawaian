<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KeluargaOrtu extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'status_keluarga', 'status_pekerjaan', 'nama', 'status_pernikahan', 'tgl_lahir', 'jk_kelamin', 'no_identitas', 'email', 'tgl_meninggal', 'no_tel', 'no_hp', 'agama', 'status'
    ];

    public function files()
    {
        return $this->hasMany(KeluargaOrtuFile::class);
    }
}

class KeluargaOrtuFile extends Model
{
    use HasFactory;

    protected $fillable = ['keluarga_ortu_id', 'file_path', 'file_name'];

    public function keluarga()
    {
        return $this->belongsTo(KeluargaOrtu::class);
    }
}
