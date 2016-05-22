<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
      $this->publishes([
      __DIR__ . '/../../components/jquery/jquery.min.js' => public_path('components/jquery.min.js'),
      ], 'public');

      $this->publishes([
        __DIR__ . '/../../components/jquery/jquery.min.map' => public_path('components/jquery.min.map'),
      ], 'public');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
