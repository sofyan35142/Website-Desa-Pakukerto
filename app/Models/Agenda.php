<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Agenda extends Model
{
    use HasFactory;
    // protected $primaryKey = "id";
    // protected $guarded = [];
     protected $fillable = [
        'nama_agenda',
        'tanggal_agenda',
        'waktu_agenda',
        'lokasi_agenda',
        'deskripsi_agenda',
        'poster_agenda',
    ];
}
