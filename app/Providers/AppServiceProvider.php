<?php

namespace App\Providers;

use App\Interfaces\ServiceInterfaces\BaseResourceServiceInterface;
use App\Interfaces\ServiceInterfaces\CategoryServiceInterface;
use App\Interfaces\ServiceInterfaces\ColorServiceInterface;
use App\Services\BaseResourceService;
use App\Services\CategoryService;
use App\Services\ColorService;
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
