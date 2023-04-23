<?php

namespace App\Services;

use App\Interfaces\ShapeRepositoryInterface;

class ShapeService
{
  protected ShapeRepositoryInterface $shapeRepository;

  public function __construct(ShapeRepositoryInterface $shapeRepository)
  {
    $this->shapeRepository = $shapeRepository;
  }

  public function all()
  {
    return $this->shapeRepository->all();
  }

  public function get(array $select = ['*'], array $with = [])
  {
    return $this->shapeRepository->get($select, $with);
  }

  public function find(int $id)
  {
    return $this->shapeRepository->find($id);
  }

  public function create(array $data)
  {
    return $this->shapeRepository->create($data);
  }

  public function update(int $id, array $data)
  {
    return $this->shapeRepository->update($id, $data);
  }

  public function delete(int $id)
  {
    return $this->shapeRepository->delete($id);
  }
}
