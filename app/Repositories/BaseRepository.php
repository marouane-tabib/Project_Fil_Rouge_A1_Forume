<?php

namespace App\BaseRepository;

use App\BaseRepositoryInterface\BaseRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class BaseRepository implements BaseRepositoryInterface
{
  private Model $model;

  public function __construct(Model $model)
  {
    $this->model = $model;
  }

  public function all()
  {
    return $this->model->all();
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
