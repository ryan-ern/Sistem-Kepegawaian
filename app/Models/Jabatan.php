<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'jenis_jabatan', 'mutasi', 'penugasan', 'tgl_sk', 'tgl_tmt',
        'tgl_tmt_pelantikan', 'status_riwayat', 'instansi', 'sk', 'sk_induk', 'unit_organisasi', 'nama_jabatan', 'no_sk', 'status',
    ];

    public function files()
    {
        return $this->hasMany(JabatanFile::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
