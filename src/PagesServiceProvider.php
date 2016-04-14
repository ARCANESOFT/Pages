<?php namespace Arcanesoft\Pages;

use Arcanesoft\Core\Bases\PackageServiceProvider;
use Arcanesoft\Core\CoreServiceProvider;

/**
 * Class     PagesServiceProvider
 *
 * @package  Arcanedev\Pages
 * @author   ARCANEDEV <arcanedev.maroc@gmail.com>
 */
class PagesServiceProvider extends PackageServiceProvider
{
    /* ------------------------------------------------------------------------------------------------
     |  Properties
     | ------------------------------------------------------------------------------------------------
     */
    protected $package = 'pages';

    /* ------------------------------------------------------------------------------------------------
     |  Getters & Setters
     | ------------------------------------------------------------------------------------------------
     */
    /**
     * Get the base path of the package.
     *
     * @return string
     */
    public function getBasePath()
    {
        return dirname(__DIR__);
    }

    /* ------------------------------------------------------------------------------------------------
    |  Main Functions
    | ------------------------------------------------------------------------------------------------
    */
    /**
     * Register the service provider.
     */
    public function register()
    {
        $this->registerConfig();
        $this->registerSidebarItems();

        $this->app->register(CoreServiceProvider::class);
        $this->app->register(Providers\PackagesServiceProvider::class);
        $this->app->register(Providers\AuthorizationServiceProvider::class);
        $this->app->register(Providers\ComposerServiceProvider::class);

        if ($this->app->runningInConsole()) {
            $this->app->register(Providers\CommandServiceProvider::class);
        }
    }

    /**
     * Boot the service provider.
     */
    public function boot()
    {
        $this->registerPublishes();

        $this->app->register(Providers\RouteServiceProvider::class);
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [
            //
        ];
    }

    /* ------------------------------------------------------------------------------------------------
     |  Other Functions
     | ------------------------------------------------------------------------------------------------
     */
    /**
     * Register publishes.
     */
    private function registerPublishes()
    {
        // Config
        $this->publishes([
            $this->getConfigFile() => config_path("{$this->vendor}/{$this->package}.php"),
        ], 'config');

        // Views
        $viewsPath = $this->getBasePath() . '/resources/views';
        $this->loadViewsFrom($viewsPath, $this->package);
        $this->publishes([
            $viewsPath => base_path("resources/views/vendor/{$this->package}"),
        ], 'views');

        // Translations
        $translationsPath = $this->getBasePath() . '/resources/lang';
        $this->loadTranslationsFrom($translationsPath, $this->package);
        $this->publishes([
            $translationsPath => base_path("resources/lang/vendor/{$this->package}"),
        ], 'lang');

        // Sidebar items
        $this->publishSidebarItems();
    }
}
