<?php

namespace App\Services;

use App\Interfaces\TagRepositoryInterface;

class TagService
{
  protected TagRepositoryInterface $tagRepository;

  public function __construct(TagRepositoryInterface $tagRepository)
  {
    $this->tagRepository = $tagRepository;
  }
}
