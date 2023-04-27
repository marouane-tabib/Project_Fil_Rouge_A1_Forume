<?php

namespace App\Repositories;

use App\Interfaces\ColorRepositoryInterface;
use App\Models\Color;

class ColorRepository extends BaseRepository implements ColorRepositoryInterface
{
  protected $model;

  public function __construct(Color $model)
  {
    $this->model = $model;
  }
}
