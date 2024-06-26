<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JabatanFile extends Model
{
    use HasFactory;

    protected $fillable = ['jabatan_id', 'file_path', 'file_name'];

    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class);
    }
}
