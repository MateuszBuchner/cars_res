<?php

namespace App\Models;

use App\Enums\BodyType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable =[
        'body_type',
        'make',
        'model',
        'first_registration',
        'mileage',
        'price',
        'description'
    ];

    protected $bar = [
        'type' => BodyType::class,
    ];
}
