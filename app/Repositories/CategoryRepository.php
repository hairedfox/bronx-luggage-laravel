<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Base\Repository\AbstractRepository;
use App\Models\Category;
class CategoryRepository extends AbstractRepository {
    public function model(): string
    {
        return Category::class;
    }

    public function listNoPagination(): array
    {
        return $this->query()->get()->toArray();
    }
}
