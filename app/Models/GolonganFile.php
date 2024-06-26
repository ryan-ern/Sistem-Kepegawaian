<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GolonganFile extends Model
{
    use HasFactory;

    protected $fillable = ['golongan_id', 'file_path', 'file_name'];

    public function golongan()
    {
        return $this->belongsTo(Golongan::class);
    }
}
