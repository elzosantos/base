<?php


namespace App\Services;

use App\DTO\Replies\CreateReplytDTO;
use App\DTO\Supports\CreateSupportDTO;
use App\DTO\Supports\UpdateSupportDTO;
use App\Repositories\Contracts\ReplyRepositoryInterface;
 
use stdClass;

class ReplySupportService
{

    public function __construct(protected ReplyRepositoryInterface $repository)
    {
    }
    public function getAllBySupportId(string $supportId): array
    {
        return  [];
    }

    public function createNew(
        CreateReplytDTO $dto 
    ): stdClass  {
        throw new \Exception('not todo');
 
    }
   /* public function findOne(string $id): stdClass|null
    {
        return $this->repository->findOne($id);
    }
    public function delete(string $id): void
    {
        $this->repository->delete($id);
    }
   

    public function update(
        UpdateSupportDTO $dto
    ): stdClass|null {


        return $this->repository->update(
            $dto
        );
    }*/
}
