<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Base\Repository\AbstractRepository;
use App\Models\Brand;
class BrandRepository extends AbstractRepository {
    public function model(): string
    {
        return Brand::class;
    }

    public function dropdown(): array
    {
        return $this->query()->get()->toArray();
    }
}
