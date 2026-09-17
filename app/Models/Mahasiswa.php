<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    //
    use HasFactory;

    protected $table = 'mahasiswa';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama',
        'nim',
        'prodi',
        'angkatan',
        'jenis_kelamin',
        'email',
        'alamat',
        'no_telepon',
        'no_ktp',
        'nama_ibu',
        'foto_profil',
    ];
}
