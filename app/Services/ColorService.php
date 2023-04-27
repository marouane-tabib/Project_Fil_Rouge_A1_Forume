<?php

namespace App\Services;

use App\Interfaces\ColorRepositoryInterface;

class ColorService
{
  protected ColorRepositoryInterface $colorRepository;

  public function __construct(ColorRepositoryInterface $colorRepository)
  {
    $this->colorRepository = $colorRepository;
  }
}
