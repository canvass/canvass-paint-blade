<?php

namespace CanvassPaint\Blade;

use Illuminate\Support\ServiceProvider;

class CanvassPaintServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function boot()
    {
        $this->loadViewsFrom(
            dirname(__DIR__, 3) . '/views/',
            'canvass_paint'
        );
    }
}
