<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'value',
    ];

    public static function getValueByCode(\App\Enums\Config $code): string
    {
        $config = self::code($code)->first();
        return $config->value;
    }

    public function scopeCode($query, \App\Enums\Config $code)
    {
        return $query->where('code', $code->value());
    }
}
