<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ReplySupport extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'replies_support';

    protected $fillable = [
        'user_id',
        'support_id',
        'content'

    ];
    protected $with = ['user'];

    public function createdAt(): Attribute
    {
        return Attribute::make(
            get: fn (string $createdAt) => Carbon::make($createdAt)->format('d/m/Y H:i')

        );
    }

    /** Get user that created the support */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    /**Get all the replies related on that support**/
    public function support(): BelongsTo
    {
        return $this->belongsTo(Support::class);
    }
}
