<?php namespace Arcanesoft\Pages\Http\Routes\Admin;

use Arcanedev\Support\Routing\RouteRegistrar;

/**
 * Class     StatsRoutes
 *
 * @package  Arcanesoft\Pages\Http\Routes\Back
 * @author   ARCANEDEV <arcanedev.maroc@gmail.com>
 */
class StatsRoutes extends RouteRegistrar
{
    /* -----------------------------------------------------------------
     |  Main Methods
     | -----------------------------------------------------------------
     */

    /**
     * Map routes.
     */
    public function map()
    {
        $this->prefix('stats')->group(function () {
            $this->get('/', 'DashboardController@index')
                 ->name('dashboard'); // admin::pages.dashboard
        });
    }
}
