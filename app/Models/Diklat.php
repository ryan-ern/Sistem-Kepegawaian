<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diklat extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'jenis_diklat', 'nama_diklat', 'institusi', 'tgl_selesai', 'durasi', 'rumpun', 'tgl_mulai', 'no_sertif', 'tahun', 'status'
    ];

    public function files()
    {
        return $this->hasMany(DiklatFile::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
