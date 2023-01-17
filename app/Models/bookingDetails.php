<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bookingDetails extends Model
{
    use HasFactory;
    protected $fillable = [
        'book_id',
        'tran_id',
        'amount',
        'contact_name',
        'contact',
        'address',
        'service_date',
        'service_time'
    ];
}
