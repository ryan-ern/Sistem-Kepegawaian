<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendidikan extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'pendidikan', 'tingkat_pendidikan', 'tahun_lulus', 'tgl_lulus', 'no_ijasah', 'nama_univ', 'gelar_depan', 'gelar_belakang', 'status'];

    public function files()
    {
        return $this->hasMany(PendidikanFile::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
