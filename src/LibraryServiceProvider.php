<?php

namespace LianMafutra\Component;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class LibraryServiceProvider extends ServiceProvider
{
   

    /** @var string */
    private const PATH_VIEWS = __DIR__.'/../resources/views';

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot(): void
    {
       

        $this->loadViewsFrom(self::PATH_VIEWS, 'laravel-blade-component');

        $this
            ->registerComponents()
            ->registerComponentsPublishers();
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register(): void
    {
    }

    /**
     * Register the Blade form components.
     *
     * @return $this
     */
    private function registerComponents(): self
    {
       

        return $this;
    }

    /**
     * Register the publishers of the component resources.
     *
     * @return $this
     */
    public function registerComponentsPublishers(): self
    {
        $this->publishes([
            self::PATH_VIEWS => resource_path('views/vendor/laravel-blade-component'),
        ], 'components');


        return $this;
    }
}