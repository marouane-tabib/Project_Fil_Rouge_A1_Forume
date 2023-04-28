<?php

namespace App\Services;

use App\Interfaces\ServiceInterfaces\CityServiceInterface;
use App\Repositories\ColorRepository;

class CityService extends BaseResourceService implements CityServiceInterface
{
  protected $repository;

  public function __construct(ColorRepository $repository)
  {
    $this->repository = $repository;
  }
}
