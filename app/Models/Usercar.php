<?php

namespace App\Models;

use App\Models\Image;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Usercar extends Model
{
    use HasFactory;

    protected $fillable = [
        'body_type',
        'make',
        'model',
        'first_registration',
        'mileage',
        'price',
        'description',
        'mainimage',
        'status',
    ];

    public function images(){
        return $this->hasMany(Image::class);
    }
}
