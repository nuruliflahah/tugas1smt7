<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelajaran extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama pelajaran',
        'waktu',
        'hari',
    ];
    protected function pelajaran(): Attribute
    {
        return Attribute::make(
            get: fn ($pelajaran) => url('/strorage/pelajaran/' .$pelajaran),
        );
    }
}
