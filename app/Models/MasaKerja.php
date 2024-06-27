<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasaKerja extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'masa_kerja', 'instansi', 'tgl_awal', 'tgl_akhir', 'no_sk', 'tgl_sk', 'no_bkn', 'tgl_bkn', 'masa_kerja_tahun', 'masa_kerja_bulan', 'status',
    ];

    public function files()
    {
        return $this->hasMany(MasaKerjaFile::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
