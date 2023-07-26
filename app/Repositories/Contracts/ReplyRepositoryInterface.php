<?php

namespace App\Repositories\Contracts;

use App\DTO\Replies\CreateReplytDTO;
use stdClass;

interface ReplyRepositoryInterface
{

    public function getAllBySupportId(string $supportId): array;
    public function createNew(
        CreateReplytDTO $dto
    ): stdClass;
}
