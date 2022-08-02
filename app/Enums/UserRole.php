<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
enum UserRole
{
    const Admin = 'admin';
    const User = 'user';

    const Types = [
        self::Admin,
        self::User
    ];
}
