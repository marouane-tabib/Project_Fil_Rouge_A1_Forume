<?php

namespace App\Services;

use App\Interfaces\PaternRepositoryInterface;

class PaternService
{
  protected PaternRepositoryInterface $paternRepository;

  public function __construct(PaternRepositoryInterface $paternRepository)
  {
    $this->paternRepository = $paternRepository;
  }

  public function all()
  {
    return $this->paternRepository->all();
  }

  public function get(array $select = ['*'], array $with = [])
  {
    return $this->paternRepository->get($select, $with);
  }

  public function find(int $id)
  {
    return $this->paternRepository->find($id);
  }

  public function create(array $data)
  {
    return $this->paternRepository->create($data);
  }

  public function update(int $id, array $data)
  {
    return $this->paternRepository->update($id, $data);
  }

  public function delete(int $id)
  {
    return $this->paternRepository->delete($id);
  }
}
