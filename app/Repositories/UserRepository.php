<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Base\Repository\AbstractRepository;
use App\Models\User;
use Illuminate\Contracts\Pagination\Paginator;

class UserRepository extends AbstractRepository {
    public function model(): string
    {
        return User::class;
    }

    public function list(array $params): Paginator
    {
        return $this->query()
                    ->where('role', 'user')
                    ->paginate($this->getPageSize($params));
    }
}
