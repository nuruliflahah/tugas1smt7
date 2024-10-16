<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class absensi extends Model
{
    use HasFactory;
    protected $fillable = [
        'tanggal',
        'id_guru',
        'id_pelajaran',
        'status',
    ];
    protected function absensi(): Attribute
    {
        return Attribute::make(
            get: fn ($absensi) => url('/strorage/absensi' .$absensi),
        );
    }
}
