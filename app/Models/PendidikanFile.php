<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PendidikanFile extends Model
{
    use HasFactory;

    protected $fillable = ['pendidikan_id', 'file_path', 'file_name'];

    public function pendidikan()
    {
        return $this->belongsTo(Pendidikan::class);
    }
}
