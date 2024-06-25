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

class DataDiriFile extends Model
{
    use HasFactory;

    protected $fillable = ['data_diri_id', 'file_path', 'file_name'];

    public function data_diri()
    {
        return $this->belongsTo(DataDiri::class);
    }
}
