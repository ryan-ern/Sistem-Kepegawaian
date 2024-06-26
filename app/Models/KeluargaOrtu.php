<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KeluargaOrtu extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'status_keluarga', 'status_pekerjaan', 'nama', 'status_pernikahan', 'tgl_lahir', 'jk', 'no_identitas', 'email', 'tgl_meninggal', 'no_tel', 'no_hp', 'agama', 'status'
    ];

    public function files()
    {
        return $this->hasMany(KeluargaOrtuFile::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
