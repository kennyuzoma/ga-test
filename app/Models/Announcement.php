<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Mail\Markdown;
use Illuminate\Database\Eloquent\Casts\Attribute;

/**
 * The Annoucement Model
 *
 *
 */
class Announcement extends Model
{
    use HasFactory;

    /**
     * Markdown Attribute
     * @return Attribute
     */
    protected function mdBody(): Attribute
    {
        return Attribute::make(
            get: fn () => Markdown::parse($this->attributes['body']),
        );
    }

    /**
     * User Relationship
     * @return BelongsTo
     */
    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
