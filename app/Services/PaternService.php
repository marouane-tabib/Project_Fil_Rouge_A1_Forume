<?php

namespace App\Services;

use App\Interfaces\PaternRepositoryInterface;

class PaternService
{
  protected PaternRepositoryInterface $paternRepository;

  public function __construct(PaternRepositoryInterface $paternRepository)
  {
    $this->paternRepository = $paternRepository;
  }
}
