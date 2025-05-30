<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Hospital extends Model
{
    use HasFactory, SoftDeletes;

    public $table = 'hospitals';

    protected $fillable = [
        'name',
        'category_id',
        'description',
        'address',
        'thumbnail',
        'latitude',
        'longitude',
        'slug',
        'open',
        'close',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }


    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function layanans()
    {
        return $this->hasMany(Layanan::class);
    }
}