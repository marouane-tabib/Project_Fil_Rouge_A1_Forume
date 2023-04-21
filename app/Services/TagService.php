<?php

namespace App\Services;

use App\Interfaces\TagRepositoryInterface;

class TagService
{
  protected TagRepositoryInterface $tagRepository;

  public function __construct(TagRepositoryInterface $tagRepository)
  {
    $this->tagRepository = $tagRepository;
  }

  public function all()
  {
    return $this->tagRepository->all();
  }

  public function get(array $select = ['*'], array $with = [])
  {
    return $this->tagRepository->get($select, $with);
  }

  public function find(int $id)
  {
    return $this->tagRepository->find($id);
  }

  public function create(array $data)
  {
    return $this->tagRepository->create($data);
  }

  public function update(int $id, array $data)
  {
    return $this->tagRepository->update($id, $data);
  }

  public function delete(int $id)
  {
    return $this->tagRepository->delete($id);
  }
}
