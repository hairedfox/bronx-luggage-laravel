<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Base\Repository\AbstractRepository;
use App\Models\OrderDetail;

class OrderDetailRepository extends AbstractRepository {
  public function model(): string
  {
    return OrderDetail::class;
  }

  public function create(array $params) {
    $orderDetail = $this->query()->create($params);

    return $orderDetail;
  }
}
