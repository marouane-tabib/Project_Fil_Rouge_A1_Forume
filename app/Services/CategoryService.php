<?php

namespace App\Services;

use App\Interfaces\CategoryRepositoryInterface;

class CategoryService
{
  protected CategoryRepositoryInterface $categoryRepository;

  public function __construct(CategoryRepositoryInterface $categoryRepository)
  {
    $this->categoryRepository = $categoryRepository;
  }

  public function all()
  {
    return $this->categoryRepository->all();
  }

  public function get(array $select = ['*'], array $with = [])
  {
    return $this->categoryRepository->get($select, $with);
  }

  public function find(int $id)
  {
    return $this->categoryRepository->find($id);
  }

  public function create(array $data)
  {
    return $this->categoryRepository->create($data);
  }

  public function update(int $id, array $data)
  {
    return $this->categoryRepository->update($id, $data);
  }

  public function delete(int $id)
  {
    return $this->categoryRepository->delete($id);
  }
}
