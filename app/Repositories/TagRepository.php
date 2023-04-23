<?php

namespace App\Repositories;

use App\Interfaces\TagRepositoryInterface;
use App\Models\Tag;

class TagRepository extends BaseRepository implements TagRepositoryInterface
{
  protected $model;

  public function __construct(Tag $model)
  {
    $this->model = $model;
  }
}
