<?php

namespace App\Enums;

enum StateOfWear: string
{
    case Nowy = 'Nowy';
    case Lekko = 'Lekko zużyty';
    case Mocne = 'Mocne zużycie';
}
