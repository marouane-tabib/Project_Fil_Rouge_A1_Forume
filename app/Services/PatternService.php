<?php

namespace App\Services;

use App\Interfaces\PatternRepositoryInterface;

class PatternService
{
  protected PatternRepositoryInterface $patternRepository;

  public function __construct(PatternRepositoryInterface $patternRepository)
  {
    $this->patternRepository = $patternRepository;
  }

  public function all()
  {
    return $this->patternRepository->all();
  }

  public function get(array $select = ['*'], array $with = [])
  {
    return $this->patternRepository->get($select, $with);
  }

  public function find(int $id)
  {
    return $this->patternRepository->find($id);
  }

  public function create(array $data)
  {
    return $this->patternRepository->create($data);
  }

  public function update(int $id, array $data)
  {
    return $this->patternRepository->update($id, $data);
  }

  public function delete(int $id)
  {
    return $this->patternRepository->delete($id);
  }
}
