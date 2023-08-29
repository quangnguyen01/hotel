<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Room extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'images',
        'description',
        'category_id',
        'price',
        'content',
    ];

    public function category() {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function bookings () {
        return $this->hasMany(Booking::class);
    }
}
