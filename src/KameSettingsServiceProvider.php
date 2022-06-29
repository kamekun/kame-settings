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
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');
        $this->loadTranslationsFrom(__DIR__ . '/resources/lang', 'kame-settings');
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'kame-settings');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/config/config.php' => config_path('kame-setting.php'),
                __DIR__ . '/migrations/2022_01_14_122319_create_kame_settings_table.php' => database_path('migrations/2022_01_14_122319_create_kame_settings_table.php'),
            ], 'kamesettings-config');

            // Publishing the views.
            $this->publishes([
                __DIR__ . '/resources/views' => resource_path('views/'),
            ], 'kamesettings-views');

            // Publishing assets.
            $this->publishes([
                __DIR__ . '/resources/assets' => public_path('vendor/kame/kame-settings'),
            ], 'kamesettings-assets');

            // Publishing the translation files.
            $this->publishes([
                __DIR__ . '/resources/lang' => resource_path('lang/kame/kame-settings'),
            ], 'kamesettings-lang');

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
        $this->mergeConfigFrom(__DIR__ . 'config/config.php', 'kame-settings');

        // Register the main class to use with the facade
        $this->app->singleton('kame-settings', function () {
            return new KameSettings;
        });
    }
}