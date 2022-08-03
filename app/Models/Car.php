<?php

namespace App\Models;

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
}
