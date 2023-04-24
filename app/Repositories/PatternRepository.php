<?php

namespace App\Repositories;

use App\Interfaces\PatternRepositoryInterface;
use App\Models\Pattern;

class PatternRepository extends BaseRepository implements PatternRepositoryInterface
{
  protected $model;

  public function __construct(Pattern $model)
  {
    $this->model = $model;
  }
}