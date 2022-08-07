<?php

namespace App\Models;

use App\Enums\BodyType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable =[
    ];

    protected $bar = [
        'type' => BodyType::class,
    ];
}
