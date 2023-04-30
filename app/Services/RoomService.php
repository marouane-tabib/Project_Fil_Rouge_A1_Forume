<?php

namespace App\Services;

use App\Interfaces\RoomRepositoryInterface;
use App\Interfaces\ServiceInterfaces\RoomServiceInterface;

class RoomService extends BaseResourceService implements RoomServiceInterface
{
  protected $repository;

  public function __construct(RoomRepositoryInterface $repository)
  {
    $this->repository = $repository;
  }
}
