<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkpFile extends Model
{
    use HasFactory;

    protected $fillable = ['skp_id', 'file_path', 'file_name'];

    public function skp()
    {
        return $this->belongsTo(Skp::class);
    }
}
