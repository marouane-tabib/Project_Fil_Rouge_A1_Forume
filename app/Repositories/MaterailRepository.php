<?php

namespace App\Repositories;

use App\Interfaces\MaterailRepositoryInterface;
use App\Models\Materail;

class MaterailRepository extends BaseRepository implements MaterailRepositoryInterface
{
  protected $model;

  public function __construct(Materail $model)
  {
    $this->model = $model;
  }
}
