<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tema extends Model
{
    use HasFactory;
    protected $table = 'tema';
    protected $fillable = [
        'warna_primer',
        'warna_sekunder',
    ];
}
