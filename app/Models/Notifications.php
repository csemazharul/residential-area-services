<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notifications extends Model
{
    use HasFactory;


    // [
    //     'user_id' => $user->id,
    //     'provider_id' => $provider->id,
    //     'title' => 'Booking Order',
    //     'u_body' => 'Booking order reqeust is successfully Completed ! Your Booking ID is '.$tran_id.'',
    //     'p_body' => 'You have a new booking request ! Your Booking Order ID is '.$tran_id.'',
    //     'u_status' => 0,
    //     'p_status' => 0,
    // ]
    protected $fillable = [
        'user_id',
        'provider_id',
        'title',
        'u_body',
        'p_body',
        'u_seen',
        'p_seen'
    ];
}
