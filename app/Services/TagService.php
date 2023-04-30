<?php

namespace App\Services;

use App\Interfaces\ServiceInterfaces\TagServiceInterface;
use App\Interfaces\TagRepositoryInterface;

class TagService extends BaseResourceService implements TagServiceInterface
{
  protected $repository;

  public function __construct(TagRepositoryInterface $repository)
  {
    $this->repository = $repository;
  }
}
