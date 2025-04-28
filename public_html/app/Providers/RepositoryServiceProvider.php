<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $models = ['Admin', 'News'];
        foreach ($models as $model) {
            $this->app->bind(
                "App\Contracts\Repositories\\{$model}Repository",
                "App\Repositories\Eloquent{$model}Repository"
            );
        }
    }
}