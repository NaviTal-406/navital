<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'layanan_id',
        'jadwal_praktik',
    ];

    public function layanan()
    {
        return $this->belongsTo(Layanan::class);
    }
}