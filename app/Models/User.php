<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'nip',
        'nik',
        'email',
        'password',
        'no_tel',
        'no_hp',
        'satuan_kerja',
        'alamat',
        'tempat_lahir',
        'tgl_lahir',
        'agama',
        'jk_user',
        'foto',
        'role',
        'lokasi_kerja',
        'no_npwp',
        'tgl_npwp',
        'no_bpjs',
        'no_taspen',
        'tgl_taspen',
        'no_tapera',
        'kelas_jabatan',
        'jabatan',
        'no_karis',
        'kppn',
        'no_akta',
        'no_kk',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
