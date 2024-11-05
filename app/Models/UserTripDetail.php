<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserTripDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'check_in_date', 'check_out_date', 'adult', 'child', 'budget',
        'category_id', 'hotel_id', 'place_id', 'car_rental_id',
        'outside_datetime_start', 'outside_datetime_end'
    ];

    protected $casts = [
        'category_id' => 'array',
        'hotel_id' => 'array',
        'place_id' => 'array',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
