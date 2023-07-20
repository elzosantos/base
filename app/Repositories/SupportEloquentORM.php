<?php

use App\Models\Support;
use App\Repositories\SupportRepositoryInterface;

class SupportEloquentORM implements SupportRepositoryInterface
{

    public function __construct(
        protected Support $model
    ) {
    }

    public function getAll(string $filter = null): array
    {
        return $this->model->where(function ($query) use ($filter) {
            if ($filter) {

                $query->where('subject', $filter);
                $query->orWhere('body', $filter);
            }
        })
            ->all()
            ->toArray();
    }
    public function findOne(string $id): stdClass|null
    {
    }
    public function delete(string $id): void
    {
    }
    public function new(CreateSupportDTO  $dto): stdClass
    {
    }
    public function update(UpdateSupportDTO  $dto): stdClass|null
    {
    }
}
