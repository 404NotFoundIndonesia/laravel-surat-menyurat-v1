<?php

namespace App\Enums;

enum Role
{
    case ADMIN;
    case STAFF;

    public function status(): string
    {
        return match ($this) {
            self::ADMIN => 'admin',
            self::STAFF => 'staff',
        };
    }
}
