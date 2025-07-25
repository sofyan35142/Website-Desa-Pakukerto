<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penduduk extends Model
{
    use HasFactory;
    protected $fillable = [
        'total_dusun',
        'total_rt',
        'total_rw',
        'laki_laki',
        'perempuan',
        'total_penduduk'
    ];
}
