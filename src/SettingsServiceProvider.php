<?php


namespace PhpVan\Settings;

use Illuminate\Support\ServiceProvider;

class SettingsServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Define routes
     *
     * @return void
     */
    public function boot(): void
    {
        $this->mergeConfigFrom(
            __DIR__.'/config/phpvan_settings.php', 'phpvan_settings'
        );

        $this->loadMigrationsFrom(__DIR__.'/database/migrations');

        $this->publishes([
            __DIR__.'/config/phpvan_settings.php' => config_path('phpvan_settings.php'),
        ], 'config');

        $this->publishes([
            __DIR__.'/database/migrations/2020_05_20_163259_create_phpvan_settings_table.php' =>
                $this->app->databasePath().'/migrations/2020_05_20_163259_create_phpvan_settings_table.php',
        ], 'migrations');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register(): void
    {
        // bind 'settings' to the class named 'settings' in the IOC container
        $this->app->singleton('settings', 'PhpVan\Settings\Settings');
    }

}