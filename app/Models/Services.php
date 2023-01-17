<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{

    protected $fillable = [
        'category_id',
        
        'service_provider_id',
        'division_id',
        'district_id',
        'upazila_id',
        'union_id',
        'status',
    ];

    use HasFactory;

    public function serviceDetails()
    {
        
        return $this->hasOne(serviceDetails::class, 'service_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function district()
    {
        return $this->belongsTo(Districts::class, 'district_id');
    }
    public function division()
    {
        return $this->belongsTo(Divisions::class, 'division_id');
    }


    public function upazila(){
        return $this->belongsTo(Upazilas::class, 'upazila_id');
    }

    public function union(){
        return $this->belongsTo(Unions::class, 'union_id');
    }

    public function provider(){
        return $this->hasOneThrough(User::class, Services::class, 'id', 'id', 'id', 'service_provider_id');
    }
    public function providerDetails(){
        return $this->hasOneThrough(Provider::class, Services::class, 'id', 'user_id', 'id', 'service_provider_id');
    }

    // public function review(){
    //     // return $this->hasMany(Review::class, 'service_id');
    //     //find average review with services id

    // }

    public function review(){
        return $this->hasOne(Review::class, 'service_id')->selectRaw('service_id, avg(rating) as average_rating')->groupBy('service_id');
    }


}
