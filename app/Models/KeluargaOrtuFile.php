<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KeluargaOrtuFile extends Model
{
    use HasFactory;

    protected $fillable = ['keluarga_ortu_id', 'file_path', 'file_name'];

    public function keluarga()
    {
        return $this->belongsTo(KeluargaOrtu::class);
    }
}
