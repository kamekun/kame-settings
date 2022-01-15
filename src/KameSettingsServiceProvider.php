<?php

namespace Kamekun\KameSettings;

use Illuminate\Support\ServiceProvider;

/**
 * Class KameSettingsServiceProvider
 * @package App\Providers
 */
class KameSettingsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        // $this->loadRoutesFrom(__DIR__.'/routes.php');
        $this->loadMigrationsFrom(__DIR__ . '/../publish/database/migrations');
        $this->loadTranslationsFrom(__DIR__ . '/resources/lang', 'kame-settings');
        $this->loadViewsFrom(__DIR__ . '/../publish/resources/views', 'kame-settings');

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
            return new KameSettings;
        });
    }
}