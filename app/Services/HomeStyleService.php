<?php

namespace App\Services;

use App\Interfaces\HomeStyleRepositoryInterface;
use App\Interfaces\ServiceInterfaces\HomeStyleServiceInterface;

class HomeStyleService extends BaseResourceService implements HomeStyleServiceInterface
{
  protected $repository;

  public function __construct(HomeStyleRepositoryInterface $repository)
  {
    $this->repository = $repository;
  }
}
