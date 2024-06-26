<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataDiriFile extends Model
{
    use HasFactory;

    protected $fillable = ['data_diri_id', 'file_path', 'file_name'];

    public function data_diri()
    {
        return $this->belongsTo(DataDiri::class);
    }
}
