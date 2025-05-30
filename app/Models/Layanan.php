<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    use HasFactory;

    protected $fillable = [
    'name',
    'hospital_id',
    ];

    public function hospital()
    {
        return $this->belongsTo(Hospital::class);
    }

    public function dokters()
    {
        return $this->hasMany(Dokter::class);
    }
}