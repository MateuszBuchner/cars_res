<?php

namespace App\Enums;

enum BodyType: string
{
    case AutaMale = 'Auta małe';
    case AutaMiejskie = 'Auta miejskie';
    case Coupe = 'Coupe';
    case Kabriolet = 'Kabriolet';
    case Kombi = 'Kombi';
    case Kompakt = 'Kompakt';
    case Minivan = 'Minivan';
    case Sedan = 'Sedan';
    case Suv = 'SUV';
}
