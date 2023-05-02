<?php

namespace App\Repositories;

use App\Interfaces\RepositoryInterfaces\HomeStyleRepositoryInterface;
use App\Models\HomeStyle;

class HomeStyleRepository extends BaseRepository implements HomeStyleRepositoryInterface
{
  protected $model;

  public function __construct(HomeStyle $model)
  {
    $this->model = $model;
  }
}
