<?php

namespace App\Services;

use App\Interfaces\BaseRepositoryInterface;
use App\Interfaces\CategoryRepositoryInterface;
use App\Interfaces\ServiceInterfaces\CategoryServiceInterface;
use App\Repositories\CategoryRepository;

class CategoryService extends BaseResourceService implements CategoryServiceInterface
{
  protected $repository;

  public function __construct(CategoryRepositoryInterface $repository)
  {
    $this->repository = $repository;
  }
}
