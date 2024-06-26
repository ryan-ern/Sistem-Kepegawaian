<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasaKerjaFile extends Model
{
    use HasFactory;

    protected $fillable = ['masa_kerja_id', 'file_path', 'file_name'];

    public function masaKerja()
    {
        return $this->belongsTo(MasaKerja::class);
    }
}
