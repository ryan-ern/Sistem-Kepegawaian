<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absen extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'tgl', 'jam', 'status', 'file_path', 'file_name'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}