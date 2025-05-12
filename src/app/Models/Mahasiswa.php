<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $table = 'mahasiswas';
    protected $fillable = [
        'nim',
        'name',
        'jurusan',
        'fakultas',
        'image',
        'tanggal_lahir',
    ];

    protected $casts = [
        'tanggal_lahir' => 'datetime',
    ];
}
