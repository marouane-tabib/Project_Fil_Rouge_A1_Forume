<?php

namespace App\Services;

use App\Interfaces\MaterailRepositoryInterface;

class MaterailService
{
  protected MaterailRepositoryInterface $materailRepository;

  public function __construct(MaterailRepositoryInterface $materailRepository)
  {
    $this->materailRepository = $materailRepository;
  }

  public function all()
  {
    return $this->materailRepository->all();
  }

  public function get(array $select = ['*'], array $with = [])
  {
    return $this->materailRepository->get($select, $with);
  }

  public function find(int $id)
  {
    return $this->materailRepository->find($id);
  }

  public function create(array $data)
  {
    return $this->materailRepository->create($data);
  }

  public function update(int $id, array $data)
  {
    return $this->materailRepository->update($id, $data);
  }

  public function delete(int $id)
  {
    return $this->materailRepository->delete($id);
  }
}
