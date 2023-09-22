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

  public function findById($id): Order
  {
    return $this->query()->find($id);
  }

  public function updateStatus(Order $order, string $status): bool
  {
    return $order->update(['status' => $status]);
  }

  public function list(array $params): Paginator
  {
    return $this->query()->paginate($this->getPageSize($params));
  }

  public function create(array $params)
  {
    $order = $this->query()->create($params);

    return $order;
  }
}
