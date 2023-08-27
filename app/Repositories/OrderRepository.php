<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Base\Repository\AbstractRepository;
use Illuminate\Contracts\Pagination\Paginator;
use App\Models\Order;

class OrderRepository extends AbstractRepository {
  public function model(): string
  {
    return Order::class;
  }

  public function list(array $params): Paginator
  {
    return $this->query()->paginate($this->getPageSize($params));
  }
}
