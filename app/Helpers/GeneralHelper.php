<?php

namespace App\Helpers;

class GeneralHelper
{
    public static function calculateChangePercentage($initial, $final): float
    {
        if ($initial > $final) {
            return self::calculateDecrementPercentage($initial, $final);
        }

        if ($final > $initial) {
            return self::calculateIncrementPercentage($initial, $final);
        }

        return 0.00;
    }

    public static function calculateIncrementPercentage($initial, $final): float
    {
        return round(($final - $initial) / $final * 100, 2);
    }

    public static function calculateDecrementPercentage($initial, $final): float
    {
        return round(($initial - $final) / $initial * -100, 2);
    }

    public static function greeting(string $name = ''): string
    {
        if ($name == '') $name = auth()->user()->name;

        $greetingLang = 'evening';
        $currentHour = now()->hour;

        if ($currentHour < 4) {
            $greetingLang = 'night';
        } elseif ($currentHour < 11) {
            $greetingLang = 'morning';
        } elseif ($currentHour < 15) {
            $greetingLang = 'afternoon';
        } elseif ($currentHour > 20) {
            $greetingLang = 'night';
        }

        return __( 'dashboard.greeting.' . $greetingLang, ['name' => $name]);
    }
}
