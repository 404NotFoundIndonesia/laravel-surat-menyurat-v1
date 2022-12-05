<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Letter extends Model
{
    use HasFactory;

    /**
     * @var string[]
     */
    protected $fillable = [
        'reference_number',
        'agenda_number',
        'from',
        'to',
        'letter_date',
        'received_date',
        'description',
        'note',
        'type',
        'classification_code',
        'user_id',
    ];

    /**
     * @var string[]
     */
    protected $casts = [
        'letter_date' => 'date',
        'received_date' => 'date',
    ];

    /**
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return BelongsTo
     */
    public function classification(): BelongsTo
    {
        return $this->belongsTo(Classification::class, 'code', 'classification_code');
    }
}
