<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KtmRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'nim',
        'name',
        'jurusan',
        'fakultas',
        'image',
        'tanggal_lahir',
        'status',
    ];
}
