<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'hospital_id',
        'name',
        'rating',
        'comment',
    ];

    public function hospital()
    {
        return $this->belongsTo(Hospital::class);
    }
}