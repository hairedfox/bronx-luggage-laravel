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

  public function featuredProducts()
  {
    $result = $this->query()->with('carriersImages')->where('featured', true)->get();

    return $result;
  }

  public function create(array $params): void
  {
    $refinedParams = array_merge($params, [
      'featured' => !!(isset($params['featured']) && $params['featured'])
    ]);

    $this->query()->create($refinedParams);
  }
}
