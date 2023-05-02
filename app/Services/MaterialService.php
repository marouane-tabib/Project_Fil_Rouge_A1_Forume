<?php

namespace App\Services;

use App\Interfaces\RepositoryInterfaces\MaterialRepositoryInterface;
use App\Interfaces\ServiceInterfaces\MaterialServiceInterface;

class MaterialService extends BaseResourceService implements MaterialServiceInterface
{
  protected $repository;

  public function __construct(MaterialRepositoryInterface $repository)
  {
    $this->repository = $repository;
  }
}
