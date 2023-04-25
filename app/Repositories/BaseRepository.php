<?php

namespace App\Repositories;

use App\Interfaces\BaseRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class BaseRepository implements BaseRepositoryInterface
{
  protected $model;

  public function __construct(Model $model)
  {
    $this->model = $model;
  }

  public function all()
  {
    return $this->model->all();
  }

  public function get(array $select = ['*'], array $with = [])
  {
    return $this->model->with($with)->get($select);
  }

  public function find(int $id)
  {
    return $this->model->find($id);
  }

  public function addSelect(array $select = [])
  {
    return $this->model->addSelect($select)->get();
  }

  public function create(array $data)
  {
    return $this->model->create($data);
  }

  public function update(int $id, array $data)
  {
    return $this->model->find($id)->update($data);
  }

  public function delete(int $id)
  {
    return $this->model->find($id)->delete();
  }
}
