<?php

namespace App\Enums;

enum LetterType
{
    case INCOMING;
    case OUTGOING;

    public function type(): string
    {
        return match ($this) {
            self::INCOMING => 'incoming',
            self::OUTGOING => 'outgoing',
        };
    }
}
