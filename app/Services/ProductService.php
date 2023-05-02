<?php

namespace App\Services;

use App\Interfaces\RepositoryInterfaces\ProductRepositoryInterface;
use App\Interfaces\ServiceInterfaces\ProductServiceInterface;

class ProductService extends BaseResourceService implements ProductServiceInterface
{
  protected $repository;
  protected FileUploadService $fileUpload;
  protected $storageDerictory = "public/images/products/";

  public function __construct(ProductRepositoryInterface $repository, FileUploadService $fileUpload)
  {
    $this->repository = $repository;
    $this->fileUpload = $fileUpload;
  }

  public function index(array $select = ['*'], array $with = [])
  {
      return $this->repository->get($select, $with);
  }

  public function store(array $data)
  {
    $data['image'] = $this->fileUpload->uploadFile($data['image'], $this->storageDerictory);
    return $this->repository->create($data);
  }

  public function update(int $id, array $data)
  {
    $product = $this->repository->find($id);
    if (isset($data['image'])) {
      $data['image'] = $this->fileUpload->updateFile($product->image, $data['image'], $this->storageDerictory);
    }
    return $this->repository->update($id, $data);
  }

  public function destroy(int $id)
  {
    $product = $this->repository->find($id);
    $this->fileUpload->deleteFile($this->storageDerictory.$product->image);
    return $this->repository->delete($id);
  }
}
