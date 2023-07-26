<?php

namespace App\DTO\Replies;

use App\Enums\SupportStatus;
use App\Http\Requests\StoreUpdateSupport;

class CreateReplytDTO
{
    public function __construct(
        public string $supportId, 
        public string $content

    ) {
    }

    public static function makeFromRequest
    (StoreUpdateSupport $request): self
    {
        return new self(
            $request->supportId, 
            $request->content
        );
    }
}
