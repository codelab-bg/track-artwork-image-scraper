<?php

namespace CodelabBg\TrackArtworkImageScraper;

use Illuminate\Support\ServiceProvider;

class TrackArtworkImageScraperServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot(): void
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'codelabbg');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'codelabbg');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/track-artwork-image-scraper.php', 'track-artwork-image-scraper');

        // Register the service the package provides.
        $this->app->singleton('track-artwork-image-scraper', function ($app) {
            return new TrackArtworkImageScraper;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['track-artwork-image-scraper'];
    }

    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole(): void
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__.'/../config/track-artwork-image-scraper.php' => config_path('track-artwork-image-scraper.php'),
        ], 'track-artwork-image-scraper.config');

        // Publishing the views.
        /*$this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/codelabbg'),
        ], 'trackartworkimagescraper.views');*/

        // Publishing assets.
        /*$this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/codelabbg'),
        ], 'trackartworkimagescraper.views');*/

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/codelabbg'),
        ], 'trackartworkimagescraper.views');*/

        // Registering package commands.
        // $this->commands([]);
    }
}
