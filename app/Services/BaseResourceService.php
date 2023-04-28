<?php

namespace App\Services;

use App\Interfaces\ServiceInterfaces\BaseResourceServiceInterface;
use App\Repositories\BaseRepository;

class BaseResourceService implements BaseResourceServiceInterface
{
  protected $repository;

  public function __construct(BaseRepository $repository)
  {
    $this->repository = $repository;
  }

  public function all()
  {
    return $this->repository->all();
  }

  public function store(array $data)
  {
    return $this->repository->create($data);
  }

  public function show(int $id)
  {
    return $this->repository->find($id);
  }

  public function edit(int $id)
  {
    return $this->repository->find($id);
  }

  public function update(int $id, array $data)
  {
    //
  }

  public function destroy(int $id)
  {
    //
  }
}
