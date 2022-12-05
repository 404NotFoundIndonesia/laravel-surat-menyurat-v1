<?php

namespace App\Enums;

enum Config
{
    case DEFAULT_PASSWORD;
    case PAGE_SIZE;
    case APP_NAME;
    case INSTITUTION_NAME;
    case INSTITUTION_ADDRESS;
    case INSTITUTION_PHONE;
    case INSTITUTION_EMAIL;
    case LANGUAGE;
    case PIC;

    public function value(): string
    {
        return match ($this) {
            self::DEFAULT_PASSWORD => 'default_password',
            self::PAGE_SIZE => 'page_size',
            self::APP_NAME => 'app_name',
            self::INSTITUTION_NAME => 'institution_name',
            self::INSTITUTION_ADDRESS => 'institution_address',
            self::INSTITUTION_PHONE => 'institution_phone',
            self::INSTITUTION_EMAIL => 'institution_email',
            self::LANGUAGE => 'language',
            self::PIC => 'pic',
        };
    }
}
