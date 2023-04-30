<?php

namespace App\Services;

use App\Interfaces\ServiceInterfaces\ShapeServiceInterface;
use App\Interfaces\ShapeRepositoryInterface;

class ShapeService extends BaseResourceService implements ShapeServiceInterface
{
  protected $repository;

  public function __construct(ShapeRepositoryInterface $repository)
  {
    $this->repository = $repository;
  }
}
