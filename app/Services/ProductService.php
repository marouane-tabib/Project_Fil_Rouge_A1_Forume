<?php

namespace App\Services;

use App\Interfaces\ProductRepositoryInterface;

class ProductService
{
  protected ProductRepositoryInterface $productRepository;
  protected FileUploadService $fileUpload;
  protected $storageDerictory = "public/images/products/";

  public function __construct(ProductRepositoryInterface $productRepository, FileUploadService $fileUpload)
  {
    $this->productRepository = $productRepository;
    $this->fileUpload = $fileUpload;
  }

  public function all()
  {
    return $this->productRepository->all();
  }

  public function get(array $select = ['*'], array $with = [])
  {
    return $this->productRepository->get($select, $with);
  }

  public function find(int $id)
  {
    return $this->productRepository->find($id);
  }

  public function create(array $data)
  {
    $data['image'] = $this->fileUpload->uploadFile($data['image'], $this->storageDerictory);
    return $this->productRepository->create($data);
  }

  public function update(int $id, array $data)
  {
    $product = $this->productRepository->find($id);
    if (isset($data['image'])) {
      $data['image'] = $this->fileUpload->updateFile($product->image, $data['image'], $this->storageDerictory);
    }
    return $this->productRepository->update($id, $data);
  }

  public function delete(int $id)
  {
    $product = $this->productRepository->find($id);
    $this->fileUpload->deleteFile($this->storageDerictory.$product->image);
    return $this->productRepository->delete($id);
  }
}
