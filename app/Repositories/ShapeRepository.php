<?php

namespace App\Repositories;

use App\Interfaces\ShapeRepositoryInterface;
use App\Models\Shape;

class ShapeRepository extends BaseRepository implements ShapeRepositoryInterface
{
  protected $model;

  public function __construct(Shape $model)
  {
    $this->model = $model;
  }
}
