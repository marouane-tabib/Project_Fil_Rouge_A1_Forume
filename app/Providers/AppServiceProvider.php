<?php

namespace App\Providers;

use App\Interfaces\ServiceInterfaces\BaseResourceServiceInterface;
use App\Interfaces\ServiceInterfaces\CategoryServiceInterface;
use App\Interfaces\ServiceInterfaces\ColorServiceInterface;
use App\Interfaces\ServiceInterfaces\HomeStyleServiceInterface;
use App\Interfaces\ServiceInterfaces\MaterialServiceInterface;
use App\Interfaces\ServiceInterfaces\PatternServiceInterface;
use App\Interfaces\ServiceInterfaces\ProductServiceInterface;
use App\Interfaces\ServiceInterfaces\RoomServiceInterface;
use App\Interfaces\ServiceInterfaces\ShapeServiceInterface;
use App\Services\BaseResourceService;
use App\Services\CategoryService;
use App\Services\ColorService;
use App\Services\HomeStyleService;
use App\Services\MaterialService;
use App\Services\PatternService;
use App\Services\ProductService;
use App\Services\RoomService;
use App\Services\ShapeService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
  /**
   * Register any application services.
   *
   * @return void
   */
  public function register()
  {
    $this->app->bind(ShapeServiceInterface::class, ShapeService::class);
    $this->app->bind(RoomServiceInterface::class, RoomService::class);
    $this->app->bind(ProductServiceInterface::class, ProductService::class);
    $this->app->bind(PatternServiceInterface::class, PatternService::class);
    $this->app->bind(MaterialServiceInterface::class, MaterialService::class);
    $this->app->bind(HomeStyleServiceInterface::class, HomeStyleService::class);
    $this->app->bind(ColorServiceInterface::class, ColorService::class);
    $this->app->bind(CategoryServiceInterface::class, CategoryService::class);
    $this->app->bind(BaseResourceServiceInterface::class, BaseResourceService::class);
  }

  /**
   * Bootstrap any application services.
   *
   * @return void
   */
  public function boot()
  {
    //
  }
}
