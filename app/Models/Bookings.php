<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookings extends Model
{
    use HasFactory;
    protected $fillable = [
        'track_number',
        'service_id',
        'provider_id',
        'user_id',
        'division_id',
        'district_id',
        'package_id',
        'status'
    ];

    public function bookDetails()
    {
        return $this->hasOne(bookingDetails::class, 'book_id');
    }

    public function provider()
    {
        return $this->hasOne(User::class, 'id', 'provider_id');
    }

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function service()
    {
        return $this->hasOne(Services::class, 'id', 'service_id');
    }

    public function district()
    {
        return $this->hasOne(Districts::class, 'id', 'district_id');
    }

    public function division()
    {
        return $this->hasOne(Divisions::class, 'id', 'division_id');
    }

    public function serviceDetails()
    {
        return $this->hasOneThrough(serviceDetails::class, Bookings::class, 'id', 'service_id', 'id', 'service_id');
    }

    public function package()
    {
        return $this->hasOne(Packages::class, 'id', 'package_id');
    }
}
