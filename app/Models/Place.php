<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    use HasFactory;

    protected $fillable = ['address', 'type'];

    public function images()
    {
        return $this->hasMany(PlaceImage::class);
    }
}
