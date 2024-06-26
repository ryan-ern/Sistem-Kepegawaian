<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KeluargaAnakFile extends Model
{
    use HasFactory;

    protected $fillable = ['keluarga_anak_id', 'file_path', 'file_name'];

    public function keluarga()
    {
        return $this->belongsTo(KeluargaAnak::class);
    }
}
