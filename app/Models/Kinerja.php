<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kinerja extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'tahun', 'nip', 'nama', 'unit_kerja', 'tgl', 'jabatan', 'hasil', 'instansi', 'perilaku', 'kuadran', 'penilai_jabatan', 'penilai', 'status',
    ];

    public function files()
    {
        return $this->hasMany(KinerjaFile::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
