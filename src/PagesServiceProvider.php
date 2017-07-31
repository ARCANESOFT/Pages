<?php namespace Arcanesoft\Pages;

use Arcanesoft\Core\Bases\PackageServiceProvider;

/**
 * Class     PagesServiceProvider
 *
 * @package  Arcanedev\Pages
 * @author   ARCANEDEV <arcanedev.maroc@gmail.com>
 */
class PagesServiceProvider extends PackageServiceProvider
{
    /* -----------------------------------------------------------------
     |  Properties
     | -----------------------------------------------------------------
     */

    /**
     * Package name.
     *
     * @var string
     */
    protected $package = 'pages';

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

        $this->registerProviders([
            Providers\PackagesServiceProvider::class,
            Providers\AuthorizationServiceProvider::class,
            Providers\ComposerServiceProvider::class,
            Providers\RouteServiceProvider::class,
        ]);

        $this->registerConsoleServiceProvider(Providers\CommandServiceProvider::class);
    }

    /**
     * Boot the service provider.
     */
    public function boot()
    {
        parent::boot();

        $this->publishAll();
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
}
