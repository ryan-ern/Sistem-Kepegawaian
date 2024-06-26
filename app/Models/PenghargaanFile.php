<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenghargaanFile extends Model
{
    use HasFactory;

    protected $fillable = ['penghargaan_id', 'file_path', 'file_name'];

    public function penghargaa()
    {
        return $this->belongsTo(Penghargaan::class);
    }
}
