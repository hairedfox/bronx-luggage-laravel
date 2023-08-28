<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Base\Repository\AbstractRepository;
use App\Models\Guest;
use Illuminate\Contracts\Pagination\Paginator;

class GuestRepository extends AbstractRepository {
    public function model(): string
    {
        return Guest::class;
    }

    public function list(array $params): Paginator
    {
        return $this->query()->paginate($this->getPageSize($params));
    }
}
