<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarRental extends Model
{
    use HasFactory;

    protected $fillable = ['pickup_address', 'price', 'duration'];

    public function images()
    {
        return $this->hasMany(CarRentalImage::class);
    }
}
