<?php

namespace App\Providers;

use App\Interfaces\ShapeRepositoryInterface;
use App\Repositories\ShapeRepository;use App\Interfaces\TagRepositoryInterface;
use App\Repositories\TagRepository;use App\Interfaces\CategoryRepositoryInterface;
use App\Repositories\CategoryRepository;use App\Interfaces\BaseRepositoryInterface;
use App\Interfaces\ProductRepositoryInterface;
use App\Repositories\BaseRepository;
use App\Repositories\ProductRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
      $this->app->bind(ShapeRepositoryInterface::class, ShapeRepository::class);
      $this->app->bind(TagRepositoryInterface::class, TagRepository::class);
      $this->app->bind(CategoryRepositoryInterface::class, CategoryRepository::class);
      $this->app->bind(BaseRepositoryInterface::class, BaseRepository::class);
      $this->app->bind(ProductRepositoryInterface::class, ProductRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
