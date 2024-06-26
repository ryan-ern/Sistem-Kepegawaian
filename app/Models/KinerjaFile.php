<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KinerjaFile extends Model
{
    use HasFactory;

    protected $fillable = ['kinerja_id', 'file_path', 'file_name'];

    public function kinerja()
    {
        return $this->belongsTo(Kinerja::class);
    }
}
