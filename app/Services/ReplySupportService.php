<?php


namespace App\Services;

use App\DTO\Replies\CreateReplyDTO;
use App\Events\SupportReplied;
use App\Repositories\Contracts\ReplyRepositoryInterface;
use Illuminate\Support\Facades\Gate;
use stdClass;

class ReplySupportService
{

    public function __construct(protected ReplyRepositoryInterface $repository)
    {
    }
    public function getAllBySupportId(string $supportId): array
    {
        return  $this->repository->getAllBySupportId($supportId);
    }

    public function createNew(CreateReplyDTO $dto): stdClass {
        $reply =  $this->repository->createNew($dto);
       
        SupportReplied::dispatch($reply);
        return $reply;
    }
    public function delete(string $id): bool
    {

      
        return  $this->repository->delete($id);
    }
    public function store(){
        
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
