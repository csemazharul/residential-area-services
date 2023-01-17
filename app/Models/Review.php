<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'rating',
        'comment',
        'user_id',
        'provider_id',
        'service_id',
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
    public function provider(){
        return $this->belongsTo(User::class, 'provider_id');
    }
    public function serviceDetails(){
        //get service details throgth service id
        return $this->hasOneThrough(ServiceDetails::class, Services::class, 'id', 'service_id', 'service_id', 'id');
    }
}
