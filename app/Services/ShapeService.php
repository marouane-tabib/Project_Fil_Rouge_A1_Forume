<?php

namespace App\Services;

use App\Interfaces\ShapeRepositoryInterface;

class ShapeService
{
  protected ShapeRepositoryInterface $shapeRepository;

  public function __construct(ShapeRepositoryInterface $shapeRepository)
  {
    $this->shapeRepository = $shapeRepository;
  }
}
