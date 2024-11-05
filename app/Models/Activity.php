<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $fillable = ['price', 'address', 'duration'];

    public function images()
    {
        return $this->hasMany(ActivityImage::class);
    }
}
