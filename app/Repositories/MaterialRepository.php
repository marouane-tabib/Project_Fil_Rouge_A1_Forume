<?php

namespace App\Repositories;

use App\Interfaces\MaterialRepositoryInterface;
use App\Models\Material;

class MaterialRepository extends BaseRepository implements MaterialRepositoryInterface
{
  protected $model;

  public function __construct(Material $model)
  {
    $this->model = $model;
  }
}
