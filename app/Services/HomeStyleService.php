<?php

namespace App\Services;

use App\Interfaces\HomeStyleRepositoryInterface;

class HomeStyleService
{
  protected HomeStyleRepositoryInterface $homestyleRepository;

  public function __construct(HomeStyleRepositoryInterface $homestyleRepository)
  {
    $this->homestyleRepository = $homestyleRepository;
  }
}
