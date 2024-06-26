<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataDiri extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'nama', 'status',
    ];

    public function files()
    {
        return $this->hasMany(DataDiriFile::class);
    }
}
