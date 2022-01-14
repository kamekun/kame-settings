<?php

namespace kamekun\Settings;

use Illuminate\Support\ServiceProvider;

class SetttingsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__.'/../publish/resources/lang', 'aaaa');
        // $this->loadViewsFrom(__DIR__.'/../publish/resources/views', 'aaaa');
        // $this->loadMigrationsFrom(__DIR__.'/../publish/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../publish/config/config.php' => config_path('kame-settings.php'),
            ], 'config');

            // Publishing the views.
            /*$this->publishes([
                __DIR__.'/../publish/resources/views' => resource_path('views/vendor/kame-settings'),
            ], 'views');*/

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../publish/resources/assets' => public_path('vendor/kame-settings'),
            ], 'assets');*/

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../publish/resources/lang' => resource_path('lang/vendor/kame-settings'),
            ], 'lang');*/

            // Registering package commands.
            // $this->commands([]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__ . '/../publish/config/config.php', 'kame-settings');

        // Register the main class to use with the facade
        $this->app->singleton('kame-settings', function () {
            return new Settings;
        });
    }
}