<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiklatFile extends Model
{
    use HasFactory;

    protected $fillable = ['diklat_id', 'file_path', 'file_name'];

    public function diklat()
    {
        return $this->belongsTo(Diklat::class);
    }
}
