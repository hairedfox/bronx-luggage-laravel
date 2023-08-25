<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Base\Repository\AbstractRepository;
use App\Models\Carrier;
use Illuminate\Contracts\Pagination\Paginator;

class CarrierRepository extends AbstractRepository {
  public function model(): string
  {
    return Carrier::class;
  }

  public function list(array $params): Paginator
  {
    return $this->query()->simplePaginate($this->getPageSize($params));
  }
}
