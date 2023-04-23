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
}
