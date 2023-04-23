<?php

namespace App\Services;

use App\Interfaces\RoomRepositoryInterface;

class RoomService
{
  protected RoomRepositoryInterface $roomRepository;

  public function __construct(RoomRepositoryInterface $roomRepository)
  {
    $this->roomRepository = $roomRepository;
  }

  public function all()
  {
    return $this->roomRepository->all();
  }

  public function get(array $select = ['*'], array $with = [])
  {
    return $this->roomRepository->get($select, $with);
  }

  public function find(int $id)
  {
    return $this->roomRepository->find($id);
  }

  public function create(array $data)
  {
    return $this->roomRepository->create($data);
  }

  public function update(int $id, array $data)
  {
    return $this->roomRepository->update($id, $data);
  }

  public function delete(int $id)
  {
    return $this->roomRepository->delete($id);
  }
}
