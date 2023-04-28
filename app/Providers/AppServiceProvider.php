<?php

namespace App\Providers;

use App\Interfaces\ServiceInterfaces\BaseResourceServiceInterface;
use App\Services\BaseResourceService;
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
