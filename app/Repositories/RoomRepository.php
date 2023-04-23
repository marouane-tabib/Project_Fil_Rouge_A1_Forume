<?php

namespace App\Repositories;

use App\Interfaces\RoomRepositoryInterface;
use App\Models\Room;

class RoomRepository extends BaseRepository implements RoomRepositoryInterface
{
  protected $model;

  public function __construct(Room $model)
  {
    $this->model = $model;
  }
}
