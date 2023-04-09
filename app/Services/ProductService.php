<?php

namespace App\Services;

use App\Interfaces\ProductRepositoryInterface;

class ProductService
{
  protected ProductRepositoryInterface $productRepository;

  public function __construct(ProductRepositoryInterface $productRepository)
  {
    $this->productRepository = $productRepository;
  }

  public function all()
  {
    return $this->productRepository->all();
  }

  public function find(int $id)
  {
    return $this->productRepository->find($id);
  }

  public function create(array $data)
  {
    return $this->productRepository->create($data);
  }

  public function update(int $id, array $data)
  {
    return $this->productRepository->update($id, $data);
  }

  public function delete(int $id)
  {
    return $this->productRepository->delete($id);
  }
}
