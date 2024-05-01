<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Informasi extends Model
{
    use HasFactory;
    protected $table = 'informasi';
    protected $fillable = [
        'users_id',
        'guru_karyawan_id',
        'judul',
        'isi',
        'kategori',
    ];
    public function user(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'user_id', 'id' );
    }
    public function gurukaryawan(): BelongsToMany
    {
        return $this->belongsToMany(GuruKaryawan::class, 'guru_karyawan_id', 'id' );
    }
}
