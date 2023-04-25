<?php

namespace App\Services;

use App\Interfaces\HomeStyleRepositoryInterface;

class HomeStyleService
{
  protected HomeStyleRepositoryInterface $homestyleRepository;

  public function __construct(HomeStyleRepositoryInterface $homestyleRepository)
  {
    $this->homestyleRepository = $homestyleRepository;
  }

  public function all()
  {
    return $this->homestyleRepository->all();
  }

  public function get(array $select = ['*'], array $with = [])
  {
    return $this->homestyleRepository->get($select, $with);
  }

  public function find(int $id)
  {
    return $this->homestyleRepository->find($id);
  }

  public function create(array $data)
  {
    return $this->homestyleRepository->create($data);
  }

  public function update(int $id, array $data)
  {
    return $this->homestyleRepository->update($id, $data);
  }

  public function delete(int $id)
  {
    return $this->homestyleRepository->delete($id);
  }
}