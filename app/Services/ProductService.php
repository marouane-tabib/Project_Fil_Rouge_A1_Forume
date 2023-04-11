<?php

namespace App\Services;

use App\Interfaces\ProductRepositoryInterface;

class ProductService
{
  protected ProductRepositoryInterface $productRepository;
  protected FileUploadService $fileUpload;

  public function __construct(ProductRepositoryInterface $productRepository, FileUploadService $fileUpload)
  {
    $this->productRepository = $productRepository;
    $this->fileUpload = $fileUpload;
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
    $data['image'] = $this->fileUpload->uploadFile($data['image'], 'public/images/', 'products/');
    return $this->productRepository->create($data);
  }

  public function update(int $id, array $data)
  {
    $product = $this->productRepository->find($id);
    $data['image'] = $this->fileUpload->updateFile($product->image, $data['image'], 'public/images/', 'products/');
    return $this->productRepository->update($id, $data);
  }

  public function delete(int $id)
  {
    return $this->productRepository->delete($id);
  }
}
