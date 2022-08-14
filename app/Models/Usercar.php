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
        'user_id',
        'fuel',
        'state_of_wear',
        'transmission'
    ];

    public function images(){
        return $this->hasMany(Image::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
