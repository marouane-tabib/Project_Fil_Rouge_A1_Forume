<?php

namespace App\Services;

use App\Interfaces\MaterialRepositoryInterface;

class MaterialService
{
  protected MaterialRepositoryInterface $materialRepository;

  public function __construct(MaterialRepositoryInterface $materialRepository)
  {
    $this->materialRepository = $materialRepository;
  }

  public function all()
  {
    return $this->materialRepository->all();
  }

  public function get(array $select = ['*'], array $with = [])
  {
    return $this->materialRepository->get($select, $with);
  }

  public function find(int $id)
  {
    return $this->materialRepository->find($id);
  }

  public function create(array $data)
  {
    return $this->materialRepository->create($data);
  }

  public function update(int $id, array $data)
  {
    return $this->materialRepository->update($id, $data);
  }

  public function delete(int $id)
  {
    return $this->materialRepository->delete($id);
  }
}
