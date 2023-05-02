<?php

namespace App\Services;

use App\Interfaces\RepositoryInterfaces\PatternRepositoryInterface;
use App\Interfaces\ServiceInterfaces\PatternServiceInterface;

class PatternService extends BaseResourceService implements PatternServiceInterface
{
  protected $repository;

  public function __construct(PatternRepositoryInterface $repository)
  {
    $this->repository = $repository;
  }
}
