<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PnsFile extends Model
{
    use HasFactory;

    protected $fillable = ['pns_id', 'file_path', 'file_name'];

    public function pns()
    {
        return $this->belongsTo(Pns::class);
    }
}
