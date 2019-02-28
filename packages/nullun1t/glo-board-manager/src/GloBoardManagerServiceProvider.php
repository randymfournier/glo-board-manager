<?php

namespace Nullun1t\GloBoardManager;

use Illuminate\Support\ServiceProvider;

class GloBoardManagerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

      //

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

      // Include our routes
      include __DIR__.'/routes.php';

    }
}
