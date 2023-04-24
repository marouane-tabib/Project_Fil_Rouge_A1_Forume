<?php

namespace App\Repositories;

use App\Interfaces\PaternRepositoryInterface;
use App\Models\Patern;

class PaternRepository extends BaseRepository implements PaternRepositoryInterface
{
  protected $model;

  public function __construct(Patern $model)
  {
    $this->model = $model;
  }
}
