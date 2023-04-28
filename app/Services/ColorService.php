<?php

namespace App\Services;

use App\Interfaces\ColorRepositoryInterface;
use App\Interfaces\ServiceInterfaces\ColorServiceInterface;

class ColorService extends BaseResourceService implements ColorServiceInterface
{
  protected $repository;

  public function __construct(ColorRepositoryInterface $repository)
  {
    $this->repository = $repository;
  }

  // public function all()
  // {
  //   return $this->colorRepository->all();
  // }

  // public function get(array $select = ['*'], array $with = [])
  // {
  //   return $this->colorRepository->get($select, $with);
  // }

  // public function find(int $id)
  // {
  //   return $this->colorRepository->find($id);
  // }

  // public function create(array $data)
  // {
  //   return $this->colorRepository->create($data);
  // }

  // public function update(int $id, array $data)
  // {
  //   return $this->colorRepository->update($id, $data);
  // }

  // public function delete(int $id)
  // {
  //   return $this->colorRepository->delete($id);
  // }
}
