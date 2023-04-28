<?php

namespace App\Services;

use App\Interfaces\CategoryRepositoryInterface;
use App\Interfaces\ServiceInterfaces\CategoryServiceInterface;

class CategoryService extends BaseResourceService implements CategoryServiceInterface
{
  protected $repository;

  public function __construct(CategoryRepositoryInterface $repository)
  {
    $this->repository = $repository;
  }
}
