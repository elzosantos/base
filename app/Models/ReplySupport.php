<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReplySupport extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'replies_support';

     /** Get user that created the support */
     public function user(): BelongsTo
     {
         return $this->belongsTo(User::class);
     }
     /**Get all the replies related on that support**/
     public function supports(): BelongsTo
     {
         return $this->belongsTo(Support::class);
}
