<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penghargaan extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'jenis', 'tahun', 'no_surat', 'tgl_surat', 'status',
    ];

    public function files()
    {
        return $this->hasMany(PenghargaanFile::class);
    }
}

class PenghargaanFile extends Model
{
    use HasFactory;

    protected $fillable = ['penghargaan_id', 'file_path', 'file_name'];

    public function penghargaa()
    {
        return $this->belongsTo(Penghargaan::class);
    }
}