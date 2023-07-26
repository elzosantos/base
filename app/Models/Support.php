<?php

namespace App\Models;

use App\Enums\SupportStatus;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Support extends Model
{
    use HasFactory, HasUuids;
    protected $fillable = [
        'subject',
        'body',
        'status'
    ];

    public function status(): Attribute
    {
        return Attribute::make(
            set: fn (SupportStatus $status) => $status->name

        );
    }

    /** Get user that created the support */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    /**Get all the replies related on that support**/
    public function replies(): HasMany
    {
        return $this->hasMany(ReplySupport::class);
    }
}
