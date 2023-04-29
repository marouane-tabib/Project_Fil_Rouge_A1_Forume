<?php

namespace App\Services;

use App\Interfaces\ColorRepositoryInterface;
use App\Interfaces\ServiceInterfaces\ColorServiceInterface;

class ColorService extends BaseResourceService implements ColorServiceInterface
{
  protected $repository;

  public function __construct(ColorRepositoryInterface $repository)
  {
    $this->repository = $repository;
  }
}
