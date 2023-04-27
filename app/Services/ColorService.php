<?php

namespace App\Services;

use App\Interfaces\ColorRepositoryInterface;

class ColorService
{
  protected ColorRepositoryInterface $colorRepository;

  public function __construct(ColorRepositoryInterface $colorRepository)
  {
    $this->colorRepository = $colorRepository;
  }

  public function all()
  {
    return $this->colorRepository->all();
  }

  public function get(array $select = ['*'], array $with = [])
  {
    return $this->colorRepository->get($select, $with);
  }

  public function find(int $id)
  {
    return $this->colorRepository->find($id);
  }

  public function create(array $data)
  {
    return $this->colorRepository->create($data);
  }

  public function update(int $id, array $data)
  {
    return $this->colorRepository->update($id, $data);
  }

  public function delete(int $id)
  {
    return $this->colorRepository->delete($id);
  }
}
