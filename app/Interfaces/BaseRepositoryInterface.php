<?php

namespace App\BaseRepositoryInterface;

interface BaseRepositoryInterface
{
  public function all();
  public function create(array $data);
  public function update(int $id, array $data);
  public function delete(int $id);
}
