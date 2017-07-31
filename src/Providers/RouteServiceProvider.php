<?php namespace Arcanesoft\Pages\Providers;

use Arcanesoft\Core\Bases\RouteServiceProvider as ServiceProvider;
use Arcanesoft\Pages\Http\Routes;

/**
 * Class     RouteServiceProvider
 *
 * @package  Arcanesoft\Pages\Providers
 * @author   ARCANEDEV <arcanedev.maroc@gmail.com>
 */
class RouteServiceProvider extends ServiceProvider
{
    /* -----------------------------------------------------------------
     |  Properties
     | -----------------------------------------------------------------
     */

    protected $adminNamespace = 'Arcanesoft\\Pages\\Http\\Controllers\\Admin';

    /* -----------------------------------------------------------------
     |  Main Methods
     | -----------------------------------------------------------------
     */

    /**
     * Define the routes for the application.
     */
    public function map()
    {
        $this->adminGroup(function () {
            $this->mapAdminRoutes();
        });
    }

    /* -----------------------------------------------------------------
     |  Other Methods
     | -----------------------------------------------------------------
     */

    /**
     * Register the route bindings.
     */
    protected function registerRouteBindings()
    {
        //
    }

    /**
     * Define the admin routes for the application.
     */
    protected function mapAdminRoutes()
    {
        $this->name('pages.')
             ->prefix($this->config()->get('arcanesoft.pages.route.prefix', 'pages'))
             ->group(function () {
                 Routes\Admin\StatsRoutes::register();
                 Routes\Admin\PagesRoutes::register();
             });
    }
}
