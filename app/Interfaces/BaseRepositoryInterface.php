<?php

namespace App\RepositoryInterfaces\Interfaces;
interface BaseRepositoryInterface
{
  public function all();
  public function get(array $select = ['*'], array $with = []);
  public function find(int $id);
  public function create(array $data);
  public function update(int $id, array $data);
  public function delete(int $id);
}
