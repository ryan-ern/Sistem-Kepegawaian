<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Golongan extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'golongan', 'jenis_kp', 'masa_kerja_tahun', 'masa_kerja_bulan', 'tmt',
        'no_sk', 'tgl_sk', 'no_bkn', 'tgl_bkn', 'status'
    ];

    public function files()
    {
        return $this->hasMany(GolonganFile::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
