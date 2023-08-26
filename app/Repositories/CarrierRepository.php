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
    $result = $this->query()->with('carriersImages');

    if (isset($params['category_id_eq']))
    {
        $result = $result->join('carriers_categories', 'carriers.id', '=', 'carriers_categories.carrier_id')
                         ->where('carriers_categories.category_id', $params['category_id_eq']);
    }

    return $result->paginate($this->getPageSize($params));
  }
}
