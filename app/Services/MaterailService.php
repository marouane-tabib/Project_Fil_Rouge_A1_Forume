<?php

namespace App\Services;

use App\Interfaces\MaterailRepositoryInterface;

class MaterailService
{
  protected MaterailRepositoryInterface $materailRepository;

  public function __construct(MaterailRepositoryInterface $materailRepository)
  {
    $this->materailRepository = $materailRepository;
  }
  
}
