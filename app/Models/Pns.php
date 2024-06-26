<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pns extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'status_pns', 'no_sk_cpns', 'no_sk_pns', 'no_sk_sttpl', 'karpeg',
        'tgl_sttpl', 'no_surat_dokter', 'no_spmt', 'no_c2th', 'tgl_sk_cpns', 'tgl_sk_pns', 'tgl_tmt_pns', 'tgl_tmt_cpns', 'tgl_tmt_dokter', 'tgl_spmt', 'tgl_c2th', 'status',
    ];

    public function files()
    {
        return $this->hasMany(PnsFile::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
