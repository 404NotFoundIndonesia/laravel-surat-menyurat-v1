<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LetterStatus extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
    ];

    public function scopeSearch($query, $search)
    {
        return $query->when($search, function($query, $find) {
            return $query
                ->where('status', 'LIKE', $find . '%');
        });
    }

    public function scopeRender($query, $search)
    {
        $pageSize = Config::code(\App\Enums\Config::PAGE_SIZE)->first();
        return $query
            ->search($search)
            ->paginate($pageSize->value)
            ->appends([
                'search' => $search,
            ]);
    }
}
