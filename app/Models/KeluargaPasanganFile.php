<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KeluargaPasanganFile extends Model
{
    use HasFactory;

    protected $fillable = ['keluarga_pasangan_id', 'file_path', 'file_name'];

    public function keluarga()
    {
        return $this->belongsTo(KeluargaPasangan::class);
    }
}
