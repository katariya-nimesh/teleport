<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

    protected $fillable = ['price', 'address', 'rating', 'duration', 'name'];

    public function images()
    {
        return $this->hasMany(HotelImage::class);
    }
}
