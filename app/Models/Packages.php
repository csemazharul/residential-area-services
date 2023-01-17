<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Packages extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category_id',
        'provider_id',
        'price',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
