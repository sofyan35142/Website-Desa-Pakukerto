<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sambutankades extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'sambutan',
        'foto'
    ];
}
