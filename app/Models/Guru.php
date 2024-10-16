<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'id_pelajaran',
        'jabatan',
        'waktu',
    ];
    protected function guru(): Attribute
    {
        return Attribute::make(
            get: fn ($guru) =>url('/strorage/guru/' .$guru),
        ); 
    }
}
