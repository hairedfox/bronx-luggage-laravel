<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Base\Repository\AbstractRepository;
use App\Models\Suggestion;

class SuggestionRepository extends AbstractRepository {
  public function model(): string {
    return Suggestion::class;
  }

  public function list(array $params) {
    return $this->query()->paginate($this->getPageSize($params));
  }
}
