<?php

namespace App\Services\BaseCrudService;

use App\BaseRepositoryInterface\BaseRepositoryInterface;

class BaseCrudService
{
  protected BaseRepositoryInterface $baseRepository;

  public function __construct(BaseRepositoryInterface $baseRepository)
  {
    $this->baseRepository = $baseRepository;
  }

  public function all()
  {
    return $this->baseRepository->all();
  }

  public function create(array $data)
  {
    return $this->baseRepository->create($data);
  }

  public function update(int $id, array $data)
  {
    return $this->baseRepository->update($id, $data);
  }

  public function delete(int $id)
  {
    return $this->baseRepository->delete($id);
  }
}
